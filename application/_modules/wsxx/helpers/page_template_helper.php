<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
  
   if (! function_exists('element')) {
       function tampil($template,$data=null) {
       	   $ci = &get_instance();
		   $data['view'] = $ci->load->view('tpl/'.$template,$data,true);
		   // $ci->template->render('layout/template.php',$data);
		   $ci->load->view('layout/template.php',$data);
       }
   }