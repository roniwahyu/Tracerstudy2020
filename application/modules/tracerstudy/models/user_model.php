<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	function result($result)
	{
		if ($result->num_rows() > 1) 
        {
            return $result->result_array();
        }elseif($result->num_rows()==1){
        	return $result->row_array();
        }else 
        {
            return array();
        }
	}

	function gethash($hash){
		$this->db->select('*')->from('shamd5_hash_mhsts2020')->where('hashing',$hash);
		$result=$this->db->get();
		return $this->result($result);
	}
	function getmhs($nim){
		$this->db->select('*')->from('mhsts2020')->where('nim',$nim);
		$result=$this->db->get();
		return $this->result($result);
	}
	function email_exists($key)
	{
	    $this->db->where('email',$key);
	    $query = $this->db->get('users');
	    if ($query->num_rows() > 0){
	        return true;
	    }
	    else{
	        return false;
	    }
	}

}

/* End of file user_model.php */
/* Location: ./application/modules/tracerstudy/models/user_model.php */ ?>