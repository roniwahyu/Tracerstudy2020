<?php <?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Welcome extends Admin_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function index()
	{
		echo "Welcome";
	}
}

/* End of file Welcome.php */
/* Location: ./application/modules/welcome/controllers/Welcome.php */ ?>