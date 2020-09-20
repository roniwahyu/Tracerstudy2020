<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Members_model extends CI_Model {
	
	function get_one_mhs($nim) {
        $this->db->where('nim', $nim);
        $result = $this->db->get('01-view-mhs');
       	$this->result($result);
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
	function ceknimemail($email,$nim=null){
		$this->db->select('nim,nama,email')->from('mhsts2020');
		if(!empty($nim)){
			$this->db->where('nim',$nim);
		}
		$this->db->where('email',$email);
		// where(['nim'=>$nim,'email'=>$email]);
		$result=$this->db->get();
		return $this->result($result);
	}
	function update_nim_email($data,$email){
		$this->db->where('email',$email);
		$this->db->update('users',$data);
		// $this->db->update('Table', $object);
		return $this->db->affected_rows();
	}

}

/* End of file members.php */
/* Location: ./ */
 ?>