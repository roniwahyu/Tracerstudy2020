<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Google\Client;
class Googleapis extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->library(['ion_auth', 'form_validation','session']);
		$this->load->config('google_config');
		$this->load->model('ion_auth_model','authdb',true);
		$this->load->helper(['url', 'language']);
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->client = new Google_Client();
		$this->client->setClientId($this->config->item('google_client_id'));
		$this->client->setClientSecret($this->config->item('google_client_secret'));
		$this->client->setRedirectUri($this->config->item('google_redirect_url'));
	/*	$this->client->setScopes(array(
			"https://www.googleapis.com/auth/plus.login",
			"https://www.googleapis.com/auth/plus.me",
			"https://www.googleapis.com/auth/userinfo.email",
			"https://www.googleapis.com/auth/userinfo.profile",
			// "https://www.googleapis.com/auth/user.birthday.read"
			)
		);*/
	}
	function index(){
		$this->getClient();
		/*$service = new Google_Service_Sheets($client);
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
        }*/
	}
	public function getClient()
	{
		 // $client = new Google_Client();
            $this->client->setApplicationName('Google Sheets API PHP Quickstart');
            // $this->client->setClientId($this->config->item('google_client_id'));
			// $this->client->setClientSecret($this->config->item('google_client_secret'));
			// $this->client->setRedirectUri($this->config->item('google_redirect_url'));
            $this->client->setScopes([\Google_Service_Sheets::SPREADSHEETS_READONLY]);
            $this->client->setAuthConfig(CREDENTIALS);
            $this->client->setAccessType('offline');
            $this->client->setPrompt('select_account consent');
            $service = new Google_Service_Sheets($this->client);
            // $service = new Google_Service_Sheets($client);
            // https://docs.google.com/spreadsheets/d/1YVLEY1QTFMrlIV2YAIOjsXVQQc0vkKzjrUauIPpj1oA/edit?usp=sharing
			$spreadsheetId = '1YVLEY1QTFMrlIV2YAIOjsXVQQc0vkKzjrUauIPpj1oA';
	        $range = 'Sheet1!A1:B2';
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

	      
            return $this->$client;

		
	}



	function gdrive(){
		//set your key path
		putenv("GOOGLE_APPLICATION_CREDENTIALS='".CREDENTIALS."'");
		//config
		// $client = new Google_Client();
		$this->client->useApplicationDefaultCredentials();
		$this->client->setApplicationName("Gdrive");
		$this->client->setScopes(['https://www.googleapis.com/auth/drive']);

		//multiple file from form upload
		for($i = 0; $i < count($_FILES['file']['name']); $i++){
		        $nama[$i] = $_FILES['file']['name'][$i];
		        $type[$i] = $_FILES['file']['type'][$i];
		        $content[$i] = file_get_contents($_FILES['file']['tmp_name'][$i]);
		}

		//Service Google 
		$driveService = new Google_Service_Drive($client);
		$rootFolder = '[Your Folder ID]'; //root folder

		/* please make root folder first in gdrive and change permission to anyone can view and edit. After that copy the id and assigment to $rootFolder */

		//set folder for register account
		$folderId = new Google_Service_Drive_DriveFile(array(
		  'name' => '[your folder name]',
		  'mimeType' => 'application/vnd.google-apps.folder',
		  'parents' => array($rootFolder)
		));
		       
		//make folder
		$folder = $driveService->files->create($folderId, array(
		  'fields' => 'id'
		));

		//uploading multiple file into google drive
		for($i = 0; $i < count($_FILES['file']['name']); $i++){
		  //initialize
		  $file[$i] = new Google_Service_Drive_DriveFile(array(
		    'name' => $nama[$i],
		    'parents' => array($folder->id)
		  ));
		  //uploading process
		  $result[$i] = $driveService->files->create($file[$i], array(
		    'data' => $content[$i],
		    'mimeType' => $type[$i],
		    'uploadType' => 'multipart',
		    'fields' => 'id'
		  )); 
		}
	}
}

/* End of file Googleapis.php */
/* Location: ./application/modules/Auth/controllers/Googleapis.php */ ?>