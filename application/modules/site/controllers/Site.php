<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->temp->set_theme(THEMES);
		$this->temp->set_layout('dashboardv0');
	}

	public function index()
	{
		$this->temp->render('site');
	}
	public function privacy(){
		echo "privacy";
	}
	public function termscondition(){
		echo "Syarat dan ketentuan";
	}
	public function daftar(){
		$this->temp->render('daftar');
	}
	public function monev(){
		$this->temp->render('monev');
	}

}

/* End of file site.php */
/* Location: ./application/controllers/site.php */ ?>