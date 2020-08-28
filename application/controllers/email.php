<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email extends MX_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library('email');
        $this->load->helper(['url','form']);
    }
    function index(){
        
        $this->mail();
    }
    function mail(){

        $to_email = "roniwahyu@gmail.com";
        $subject = "Simple Email Test via PHP";
        $body = "Hi,nn This is test email send by PHP Script";
        $headers = "From: sender\'s email";
         
        if (mail($to_email, $subject, $body, $headers)) {
            echo "Email successfully sent to $to_email...";
        } else {
            echo "Email sending failed...";
        }
    }
    function email(){
         $this->load->library('email');
        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'smtp.gmail.com';
        // $config['smtp_host']    = 'smtp.gmail.com';
        $config['smtp_port']    = '587';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'noreply@widyagama.ac.id';
        // $config['smtp_pass']    = '@n3002honh';
        // $config['smtp_pass']    = 'riuovcvikgpcquso';
        $config['smtp_pass']    = 'wjktaxjequlukblj';
        $config['charset']    = 'utf-8';
        // $config['charset']    = 'iso-8859-1';
        $config['newline']    = "\r\n";
        $config['crfl']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['smtp_crypto'] = 'tls'; // or html
        
         // 'mailtype'  => 'html', 
    
        $config['validation'] = TRUE; // bool whether to validate email or not      
        
       
        /*
        $this->email->from('your@example.com', 'Your Name');
        $this->email->to('someone@example.com');
        $this->email->cc('another@another-example.com');
        $this->email->bcc('them@their-example.com');
        
        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');
        
        $this->email->send();
*/
        $this->email->initialize($config);

        $this->email->from('noreply@widyagama.ac.id', 'gmail.com test');
        $this->email->to('syahroni@widyagama.ac.id'); 

        $this->email->subject('Email Test VIA Codeigniter Localhost');
        $this->email->message('Testing the email class.');  

        $this->email->send();

        echo $this->email->print_debugger();

        // $this->load->view('email_view');
    }
}
?>