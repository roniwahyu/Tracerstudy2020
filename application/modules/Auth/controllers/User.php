<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		print_r($this->claim('8701653c85a7a9b5abb8dd31b0a1a702149dd681'));
	}

	function claim($hash){
		if(!empty($hash) && $hash!=null){
			if($hash==sha1(md5('132931810680'))){
				$data=[
					'error_code'=>0,
					'error_desc'=>0,
					'data'=>[
						'nim'=>'132931810680'
					],
				];
			}else{
				$data['error_code']='1001';
				$data['error_desc']='Hash not found';
				$data['data']=false;
			}
			return $data;
		}else{
			return array();
		}
	}

	 function email(){
        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'smtp.gmail.com';
        $config['smtp_crypto'] = 'tls'; // or html
        $config['smtp_port']    = '587';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'noreply@widyagama.ac.id';
        // $config['smtp_user']    = 'noreply@widyagama.ac.id';
        // $config['smtp_pass']    = 'riuovcvikgpcquso';
        // $config['smtp_pass']    = '@n3002honh';
        // $config['smtp_pass']    = 'wmamkruxlaflhkgl';
        // $config['smtp_pass']    = 'rxtxbxbtxvkjnsqi';
        $config['smtp_pass']    = 'wjktaxjequlukblj';
        $config['charset']    = 'utf-8';
        // $config['charset']    = 'iso-8859-1';
        $config['crfl']    = "\r\n";
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
         // 'mailtype'  => 'html', 
    
        $config['validation'] = TRUE; // bool whether to validate email or not      

        $this->email->initialize($config);

        $this->email->from('noreply@widyagama.ac.id', 'gmail.com test');
        $this->email->to('roniwahyu@gmail.com'); 

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');  

        $this->email->send();

        echo $this->email->print_debugger();

        // $this->load->view('email_view');
    }
    
}

/* End of file User.php */
/* Location: ./application/modules/Auth/controllers/User.php */ ?>