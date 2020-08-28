<?php 
// require_once('Google/autoload.php');
use Google\Client;
class Google {
	protected $CI;

	public function __construct(){
		$this->CI =& get_instance();
        $this->CI->load->library('session');
        $this->CI->config->load('google_config');
        $this->client = new Google_Client();
		$this->client->setClientId($this->CI->config->item('google_client_id'));
		$this->client->setClientSecret($this->CI->config->item('google_client_secret'));
		$this->client->setRedirectUri($this->CI->config->item('google_redirect_url'));
		$this->client->setScopes(array(
			"https://www.googleapis.com/auth/plus.login",
			"https://www.googleapis.com/auth/plus.me",
			"https://www.googleapis.com/auth/userinfo.email",
			"https://www.googleapis.com/auth/userinfo.profile",
			// "https://www.googleapis.com/auth/user.birthday.read"
			)
		);
  

	}

	public function get_login_url(){
		return  $this->client->createAuthUrl();

	}
	public function validate_oauth2(){
		if (isset($_GET['code'])) {
		  $this->client->authenticate($_GET['code']);
		  $_SESSION['access_token'] = $this->client->getAccessToken();

		}
		if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
		  $this->client->setAccessToken($_SESSION['access_token']);
		  $this->client->addScope("email");
    		$this->client->addScope("profile");
    		// $this->client->addScope("login");
    		$service = new Google_Service_Oauth2($this->client);
    		// $people=$service->user->get();
    		$user = $service->userinfo->get(); //get user info 
    		echo "<pre>";
    		print_r($user);

/*			    echo "</br> User ID :".$user->id; 
			    echo "</br> User Name :".$user->name;
			    echo "</br> Gender :".$user->gender;
			    echo "</br> User Email :".$user->email;
			    echo "</br> User Link :".$user->link;    
			    echo "</br><img src='$user->picture' height='200' width='200' > ";
*/    				// $client->authenticate($_GET['code']);
    				// $_SESSION['access_token'] = $client->getAccessToken();
			// $user = $plus->people->get('me');
			$info['id']=$user->id;
			$info['email']=$user->email;
			$info['name']=$user->name;
			// $info['given_name']=$user->givenName;
			// $info['family_name']=$user->familyName;
			$info['link']=$user->link;
			$info['profile_pic']=$user->picture;
			// $info['profile_pic']=substr($user->picture,0,strpos($user->picture,"?sz=50")) . '?sz=800';

		   	return  $info;
		}
	}
	public function validate(){		
		if (isset($_GET['code'])) {
		  $this->client->authenticate($_GET['code']);
		  $_SESSION['access_token'] = $this->client->getAccessToken();

		}
		if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
		  $this->client->setAccessToken($_SESSION['access_token']);
		  // $plus = new Google_Service_Plus_Person($this->client);
		  $plus = new Google_Service_Plus($this->client);
		  // echo "<pre>";
		  // print_r($plus);
			$person = $plus->people->get('me');
			$info['id']=$person['id'];
			$info['email']=$person['emails'][0]['value'];
			$info['name']=$person['displayName'];
			$info['link']=$person['url'];
			$info['profile_pic']=substr($person['image']['url'],0,strpos($person['image']['url'],"?sz=50")) . '?sz=800';

		   return  $info;
		}


	}

}