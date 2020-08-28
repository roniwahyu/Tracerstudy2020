<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use League\OAuth2\Client\Provider\Google;
class League extends CI_Controller {

	function index(){

	}

	public function oauth2callback()
	{
		
	


	$provider = new Google([
	    'clientId'     => CLIENT_ID,
	    'clientSecret' => CLIENT_SECRET,
	    'redirectUri'  => base_url('league').'/oauth2callback',
	    'hostedDomain' => DOMAIN, // optional; used to restrict access to users on your G Suite/Google Apps for Business accounts
	]);

		if (!empty($_GET['error'])) {

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

		    // Optional: Now you have a token you can look up a users profile data
		    try {

		        // We got an access token, let's now get the owner details
		        $ownerDetails = $provider->getResourceOwner($token);

		        // Use these details to create a new profile
		        printf('Hello %s!', $ownerDetails->getFirstName());

		    } catch (Exception $e) {

		        // Failed to get user details
		        exit('Something went wrong: ' . $e->getMessage());

		    }

		    // Use this to interact with an API on the users behalf
		    echo $token->getToken();

		    // Use this to get a new access token if the old one expires
		    echo $token->getRefreshToken();

		    // Unix timestamp at which the access token expires
		    echo $token->getExpires();
		}
	}
}

/* End of file League.php */
/* Location: .//D/xampp7/htdocs/cipasarumkm/pasarumkm/modules/league/League.php */ ?>