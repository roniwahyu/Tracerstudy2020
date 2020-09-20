<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	function cek_isactive($id){
		$this->db->select('id,username,email,active,nim')->from('users')->where('id',$id);
		$result=$this->db->get();
		// print_r($result);
		return $this->result($result);
	}
	function cek_isactivebyemail($email){
		$this->db->select('id,username,email,active,nim')->from('users')->where('email',$email);
		$result=$this->db->get();
		// print_r($result);
		return $this->result($result);
	}
	function cek_isgoogle_claimed($email){
		$this->db->select('id,username,email,active,nim,claimed')->from('users')->where('email',$email);
		$result=$this->db->get();
		// print_r($result);
		return $this->result($result);
	}
	function result($result){
		if (($result->num_rows() > 1) && ($result->num_rows() > 0)){
            return $result->result_array();
        }elseif ($result->num_rows() == 1) {
            return $result->row_array();
        } 
        else 
        {
            return array();
        }
	}

}

/* End of file auth_model.php */
/* Location: ./application/models/auth_model.php */ ?>