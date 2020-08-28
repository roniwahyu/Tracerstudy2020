<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Google\Client;
class Googleapis extends Admin_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		// $client=new Client();
		print_r(JSON_KEY);
		// Get the API client and construct the service object.
        $client = $this->getClient();
        $service = new Google_Service_Sheets($client);
        // Prints the names and majors of students in a sample spreadsheet:
        // https://docs.google.com/spreadsheets/d/1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms/edit
        // $spreadsheetId = '1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms';
        $spreadsheetId = '1VaRR2SPSPVlym6MVHfZzmSr4C38pW3KvHKqXVCkTIG4';
        $range = 'Sistem Aplikasi Web!A2:A24';
        $response = $service->spreadsheets_values->get($spreadsheetId, $range);
        $values = $response->getValues();

        if (empty($values)) {
            print "No data found.\n";
        } else {
            print "Name, Major:\n";
            foreach ($values as $row) {
                // Print columns A and E, which correspond to indices 0 and 4.
                printf("%s, %s\n", $row[0], $row[4]);
            }
        }
	}
    function getClient()
        {
            $client = new Google_Client();
            $client->setApplicationName('Google Sheets API PHP Quickstart');
            $client->setScopes(Google_Service_Sheets::SPREADSHEETS_READONLY);
            $client->setAuthConfig(JSON_KEY);
            $client->setAccessType('offline');
            $client->setPrompt('select_account consent');

            // Load previously authorized token from a file, if it exists.
            // The file token.json stores the user's access and refresh tokens, and is
            // created automatically when the authorization flow completes for the first
            // time.
            $tokenPath = 'token.json';
            if (file_exists($tokenPath)) {
                $accessToken = json_decode(file_get_contents($tokenPath), true);
                $client->setAccessToken($accessToken);
            }

            // If there is no previous token or it's expired.
            if ($client->isAccessTokenExpired()) {
                // Refresh the token if possible, else fetch a new one.
                if ($client->getRefreshToken()) {
                    $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
                } else {
                    // Request authorization from the user.
                    $authUrl = $client->createAuthUrl();
                    printf("Open the following link in your browser:\n%s\n", $authUrl);
                    print 'Enter verification code: ';
                    $authCode = trim(fgets(STDIN));

                    // Exchange authorization code for an access token.
                    $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
                    $client->setAccessToken($accessToken);

                    // Check to see if there was an error.
                    if (array_key_exists('error', $accessToken)) {
                        throw new Exception(join(', ', $accessToken));
                    }
                }
                // Save the token to a file.
                if (!file_exists(dirname($tokenPath))) {
                    mkdir(dirname($tokenPath), 0700, true);
                }
                file_put_contents($tokenPath, json_encode($client->getAccessToken()));
            }
            return $client;
        }





	function login()
    {
            // Fill CLIENT ID, CLIENT SECRET ID, REDIRECT URI from Google Developer Console
    	$config['google_client_id']=CLIENT_ID;
		$config['google_client_secret']=CLIENT_SECRET;
// $config['google_redirect_url']=base_url().'googleauth/oauth2callback';
		$config['google_redirect_url']=OAUTH_CALLBACK_URI;
		$config['google_redirect_url_test']=OAUTH_TEST_URI;


        $client_id = CLIENT_ID;
        $client_secret = CLIENT_SECRET;
        $redirect_uri = base_url('googleapis/oauth2callback');;

        //Create Client Request to access Google API
        $client = new Google_Client();
        $client->setAuthConfigFile(JSON_KEY);
        $client->setApplicationName("Yourappname");
        $client->setClientId($client_id);
        $client->setClientSecret($client_secret);
        $client->setRedirectUri(file_get_contents($redirect_uri));
        $client->addScope("email");
        $client->addScope("profile");

        //Send Client Request
        $objOAuthService = new Google_Service_Oauth2($client);
        
        $authUrl = $client->createAuthUrl();
        
        header('Location: '.$authUrl);
    }
    function oauth2callback()
    {
            // Fill CLIENT ID, CLIENT SECRET ID, REDIRECT URI from Google Developer Console
     $client_id = CLIENT_ID;
     $client_secret = CLIENT_SECRET;
     $redirect_uri = base_url('googleapis/oauth2callback');

    //Create Client Request to access Google API
    $client = new Google_Client();
    $client->setApplicationName("Yourappname");
    $client->setAuthConfigFile(JSON_KEY);
    $client->setClientId($client_id);
    $client->setClientSecret($client_secret);
    $client->setRedirectUri($redirect_uri);
    $client->addScope("email");
    $client->addScope("profile");

    //Send Client Request
    $service = new Google_Service_Oauth2($client);

    $client->authenticate($_GET['code']);
    $_SESSION['access_token'] = $client->getAccessToken();
    
    // User information retrieval starts..............................

    $user = $service->userinfo->get(); //get user info 

    echo "</br> User ID :".$user->id; 
    echo "</br> User Name :".$user->name;
    echo "</br> Gender :".$user->gender;
    echo "</br> User Email :".$user->email;
    echo "</br> User Link :".$user->link;    
    echo "</br><img src='$user->picture' height='200' width='200' > ";
       
    }
}

/* End of file Googleapis.php */
/* Location: .//D/xampp7/htdocs/cipasarumkm/pasarumkm/modules/googleapis/controllers/Googleapis.php */ ?>