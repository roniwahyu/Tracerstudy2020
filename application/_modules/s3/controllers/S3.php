<?php defined('BASEPATH') OR exit('No direct script access allowed');
// require_once('vendor/autoload.php');
// require_once('libraries/S3.php');
class S3 extends Admin_Controller
{

    function __construct() {
        parent::__construct();
        // $this->load->helper('form');
        $this->load->library(['S3_upload','S3']);
        $this->template->set_theme(THEMES);
    }
    function index(){
        $this->load->library('session');
    	$this->template->render('upload');
    }
    public function addImages($id)
    {       
        $filesCount = count($_FILES['files']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['file']['name']     = $_FILES['files']['name'][$i];
                $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error']    = $_FILES['files']['error'][$i];
                $_FILES['file']['size']     = $_FILES['files']['size'][$i];

                $dir = dirname($_FILES["file"]["tmp_name"]);
                $destination = $dir . DIRECTORY_SEPARATOR . $_FILES["file"]["name"];
                rename($_FILES["file"]["tmp_name"], $destination);

                $upload = $this->s3_upload->upload_file($destination);                
            }     
    }

    function test_upload(){
    	print_r(APPATH);

  		$file = APPPATH.'public/img/image1.jpg';
  		$file_url = $this->s3_upload->upload_file($file);
    	echo var_dump($file_url);
  		//string(76) "https://bucket_name.amazonaws.com/bucket_name/folder_name/image1-50.jpg"
    }

}