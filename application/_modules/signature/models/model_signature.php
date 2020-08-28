<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_signature extends CI_Model {

	function upload($img,$base){
		$data=[
			'img'=>$img,
			'base64'=>$base,
			'status'=>0,
		];
		$this->db->insert('signature',$data);
	}	
	public function get_all($limit, $offset) 
    {

        $result = $this->db->get('signature', $limit, $offset);

        if ($result->num_rows() > 0) 
        {
            return $result->result_array();
        } 
        else 
        {
            return array();
        }
    }
    public function get_one($id) 
    {
        $this->db->where('id', $id);
        $result = $this->db->get('signature');

        if ($result->num_rows() == 1) 
        {
            return $result->row_array();
        } 
        else 
        {
            return array();
        }
    }
	function getimage(){
		$this->db->get('signature');
		// $filename = $row['img'];
		// $image = $row['base64'];

		// $pecah = explode(",", $image);
		// echo '<img src="data:image/jpeg;base64,'.$hasil = $pecah[1].'"/>';
	}

}

/* End of file model_signature.php */
/* Location: .//D/xampp7/htdocs/cipasarumkm/pasarumkm/modules/signature/models/model_signature.php */ ?>