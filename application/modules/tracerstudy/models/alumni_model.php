<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni_model extends CI_Model {

	function result($result)
	{
		if ($result->num_rows() > 0) 
        {
            return $result->result_array();
        }elseif($result->num_rows()==1){
        	return $result->row_array();
        }else 
        {
            return array();
        }
	}

}

/* End of file alumni_model.php */
/* Location: ./application/modules/tracerstudy/models/alumni_model.php */ ?>