<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Emailers extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function index()
	{
		$this->load->library('Mailer');
		$subject = 'This is a test';
		$message = '
		    <p>This message has been sent for testing purposes.</p>

		    <!-- Attaching an image example - an inline logo. -->
		    <p><img src="cid:logo_src" /></p>
		';

		// Get full html:
		$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		    <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
		    <title>' . html_escape($subject) . '</title>
		    <style type="text/css">
		        body {
		            font-family: Arial, Verdana, Helvetica, sans-serif;
		            font-size: 16px;
		        }
		    </style>
		</head>
		<body>
		' . $message . '
		</body>
		</html>';
		$data=[
			'email_penerima'=>'roniwahyu@gmail.com',
			'subjek'=>$subject,
			'content'=>$body,
		];
		$this->mailer->send($data);	
	}

}

/* End of file emailers.php */
/* Location: ./application/modules/mailer/controllers/emailers.php */ ?>