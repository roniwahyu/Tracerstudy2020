 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
use League\OAuth2\Client\Provider\Google;

class League extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	public function index()
	{
		// $provider = new Google([CLIENT_ID, CLIENT_SECRET,base_url('googleauth')]);
		$provider = new Google([
		    'clientId'     => CLIENT_ID,
		    'clientSecret' => CLIENT_SECRET,
		    'redirectUri'  => base_url('googleauth'),
		    'hostedDomain' => 'pasarumkm.id', // optional; used to restrict access to users on your G Suite/Google Apps for Business accounts
		]);

		// if (!empty($_GET['error'])) {
		if (!empty($this->input->get('error'))) {

		    // Got an error, probably user denied access
		    exit('Got error: ' . htmlspecialchars($_GET['error'], ENT_QUOTES, 'UTF-8'));

		} elseif (empty($_GET['code'])) {

		    // If we don't have an authorization code then get one
		    $authUrl = $provider->getAuthorizationUrl();
		    $_SESSION['oauth2state'] = $provider->getState(); 
		    header('Location: ' . $authUrl);
		    exit;

		} elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {

		    // State is invalid, possible CSRF attack in progress
		    unset($_SESSION['oauth2state']);
		    exit('Invalid state');

		} else {

		    // Try to get an access token (using the authorization code grant)
		    $token = $provider->getAccessToken('authorization_code', [
		        'code' => $_GET['code']
		    ]);

		    $_SESSION['token'] = serialize($token);

		    // Optional: Now you have a token you can look up a users profile data
		    // header('Location: /user.php');
		    redirect(base_url('googleauth/user'),'refresh');
		}
	}
	function validate(){
		if (isset($_GET['code'])) {
		  // Try to get an access token (using the authorization code grant)
		    $token = $provider->getAccessToken('authorization_code', [
		        'code' => $_GET['code']
		    ]);

		    $_SESSION['token'] = serialize($token);
		}
	}
	public function oauth2callback(){
		$google_data=$this->google->validate();
		$session_data=array(
				'name'=>$google_data['name'],
				'email'=>$google_data['email'],
				'source'=>'google',
				'profile_pic'=>$google_data['profile_pic'],
				'link'=>$google_data['link'],
				'sess_logged_in'=>1
				);
			$this->session->set_userdata($session_data);
			redirect(base_url());
	}
	function user(){
		if (isset($_GET['logout']) && $_GET['logout'] = 1) {
			    unset($_SESSION['token']);
			}

			if (!empty($_SESSION['token'])) {
			    $token = unserialize($_SESSION['token']);
			}

			if (empty($token)) {
			    header('Location: /');
			    exit;
			}

			try {
			    // We got an access token, let's now get the user's details
			    $userDetails = $provider->getResourceOwner($token);

			    // Use these details to create a new profile
			    printf('Hello %s!<br/>', $userDetails->getFirstname());
			} catch (Exception $e) {
			    // Failed to get user details
			    exit('Something went wrong: ' . $e->getMessage());
			}

			// Use this to interact with an API on the users behalf
			echo "Token is: <tt>", $token->getToken(), "</tt><br/>";

			// Use this to get a new access token if the old one expires
			echo "Refresh token is: <tt>", $token->getRefreshToken(), "</tt><br/>";

			// Number of seconds until the access token will expire, and need refreshing
			echo "Expires at ", date('r', $token->getExpires()), "<br/>";

			// Allow the user to logout
			echo '<a href="?logout=1">Logout</a><br/>';
	}

}

/* End of file league.php */
/* Location: .//D/xampp7/htdocs/cipasarumkm/pasarumkm/modules/googleauth/controllers/league.php */ ?>