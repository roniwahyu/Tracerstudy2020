<?php
defined('BASEPATH') OR exit('No direct script access allowed');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mailers extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('MY_email');
		$this->load->library('MY_Email');
		$this->load->config('email');
		//Do your magic here
	}
	public function index()
	{
		$this->load->library('email');

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
		// Also, for getting full html you may use the following internal method:
		//$body = $this->email->full_html($subject, $message);

		// Attaching the logo first.
		// $file_logo = FCPATH.'apple-touch-icon-precomposed.png';  // Change the path accordingly.
		// The last additional parameter is set to true in order
		// the image (logo) to appear inline, within the message text:
		// $this->email->attach($file_logo, 'inline', null, '', true);
		// $cid_logo = $this->email->get_attachment_cid($file_logo);
		// $body = str_replace('cid:logo_src', 'cid:'.$cid_logo, $body);
		// End attaching the logo.

		$result = $this->email
		    ->from('yourusername@gmail.com')
		    ->reply_to('yoursecondemail@somedomain.com')    // Optional, an account where a human being reads.
		    ->to('therecipient@otherdomain.com')
		    ->subject($subject)
		    ->message($body)
		    ->send();

		var_dump($result);
		echo '<br />';
		echo $this->email->print_debugger();

		exit;		
	}

}

/* End of file Mailers.php */
/* Location: ./application/modules/mailer/controllers/Mailers.php */ ?>