<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signature extends Admin_Controller {

	function __construct(){
		parent::__construct();
		  	$this->temp->set_theme(THEMES);
        	$this->temp->set_layout('dashboardv0');
        	$this->load->model('model_signature','signdb',true);
       
	}
	public function index()
	{
		$this->temp->add_js('jsignature/libs/jSignature.min.js');
		$this->temp->add_js('jsignature/libs/modernizr.js');
		$this->temp->add_js('
            $(document).ready(function() {

                // Initialize jSignature
                var $sigdiv = $("#signature").jSignature({"UndoButton":true});

                $("#click").click(function(){
                    // Get response of type image
                    var data = $sigdiv.jSignature("getData", "image");

                    // Storing in textarea
                    $("#output").val(data);
                    
                    // Alter image source
                    $("#sign_prev").attr("src","data:"+data);
                    $("#sign_prev").show();
                });
            });','embed');
	    

		$this->temp->render('sign');	
	}
	function upload(){
		$img=$this->input->post('img');
		define('UPLOAD_DIR', 'images/');
		// $img = $_POST['img'];
		$img = str_replace('data:image/png;base64,', '', $img);
		$img = str_replace(' ', '+', $img);
		$data = base64_decode($img);
		$file = APPPATH.'../public/uploads/signature/' . uniqid() . '.jpeg';
		$success = file_put_contents($file, $data);
		$this->signdb->upload($file,$img);
	}
	function uploadsign(){
		 //file upload code 
      //set file upload settings 
      $config['upload_path']          = APPPATH. '../assets/uploads/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 100;
      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('pic_file')){
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('upload_form', $error);
      }else{
        //file is uploaded successfully
        //now get the file uploaded data 
        $upload_data = $this->upload->data();
        //get the uploaded file name
        $data['pic_file'] = $upload_data['file_name'];
        //store pic data to the db
 
        $this->pic_model->store_pic_data($data);
      }
	}
	function show(){
		$row=$this->signdb->get_all(0,0);
		foreach ($row as $key => $value) {
			# code...
			$pecah=explode(",", $value['base64']);
			// print_r();
			echo '<img src="data:image/jpeg;base64,'.$hasil = $pecah[1].'"/>';
		}
		// $filename = $row['img'];
		// $image = $row['base64'];

		// $pecah = explode(",", $image);
	}

}

/* End of file Signature.php */
/* Location: .//D/xampp7/htdocs/cipasarumkm/pasarumkm/modules/signature/controllers/Signature.php */ ?>