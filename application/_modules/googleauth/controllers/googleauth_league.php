<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use League\OAuth2\Client\Provider\Google;
class Googleauth extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function index()
	{

		$provider = new Google([
		    'clientId'     => CLIENT_ID,
		    'clientSecret' => CLIENT_SECRET,
		    'redirectUri'  => OAUTH_CALLBACK_URL,
		    'hostedDomain' => DOMAIN, // optional; used to restrict access to users on your G Suite/Google Apps for Business accounts
		]);
	}
	public function validate(){		
		if (isset($_GET['code'])) {
		  $this->client->authenticate($_GET['code']);
		  $_SESSION['access_token'] = $this->client->getAccessToken();

		}
		if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
		  $this->client->setAccessToken($_SESSION['access_token']);
		  $plus = new Google_Service_Plus($this->client);
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

/* End of file googleauth.php */
/* Location: .//D/xampp7/htdocs/cipasarumkm/pasarumkm/modules/googleauth/controllers/googleauth.php */ ?>