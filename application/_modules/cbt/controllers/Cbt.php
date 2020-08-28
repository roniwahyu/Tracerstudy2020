<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set("Asia/Jakarta");
class Cbt extends Admin_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->db->query("SET time_zone='+7:00'");
		$this->load->model('cbt_model','catdb',true);
		//Do your magic here
	}
	public function index()
	{
		$this->template->render("cbt");
	}

}

/* End of file Cbt.php */
/* Location: .//D/xampp7/htdocs/cipasarumkm/pasarumkm/modules/cbt/controllers/Cbt.php */ ?>