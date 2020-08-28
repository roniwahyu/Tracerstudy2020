<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdpt_model extends CI_Model {

	function getview($view){
		$result=$this->db->select('*')->from($view)->get();
		// $result=$this->db->get();

		$this->result($result);
	}	
	function result($result){
		if ($result->num_rows() > 0) 
        {
            return $result->result_array();
        } 
		elseif ($result->num_rows() == 1) 
        {
            return $result->row_array();
        } 
        else 
        {
            return array();
        }
	}
	 function __dropdown__(){
        $result = array();
        $array_keys_values = $this->db->get('desa')->result();
        $result[0]="-- Pilih desa --";
        foreach ($array_keys_values->result() as $row)
        {
            $result[$row->id]= $row->id." (".$row->id.")" ;
        }
        return $result;
    }

    public function get_all($limit, $offset) 
    {

        $result = $this->db->get('desa', $limit, $offset);

       if ($result->num_rows() > 0) 
        {
            return $result->result_array();
        } 
        else 
        {
            return array();
        }
    }

    

    /**
     *  Count All desa
     *    
     *  @return Integer
     *
     */
    public function count_all()
    {
        $this->db->from('desa');
        return $this->db->count_all_results();
    }
    

    /**
    * Search All desa
    *
    *  @param limit   : Integer
    *  @param offset  : Integer
    *  @param keyword : mixed
    *
    *  @return array
    *
    */
    public function get_search($limit, $offset) 
    {
        $keyword = $this->session->userdata('keyword');
                
        $this->db->like('kdprov', $keyword);  
                
        $this->db->like('kdKab', $keyword);  
                
        $this->db->like('kdKec', $keyword);  
                
        $this->db->like('kode', $keyword);  
                
        $this->db->like('desa', $keyword);  
                
        $this->db->like('kodedesa', $keyword);  
        
        $this->db->limit($limit, $offset);
        $result = $this->db->get('desa');

        if ($result->num_rows() > 0) 
        {
            return $result->result_array();
        } 
        else 
        {
            return array();
        }
    }

    
    
    
    
    
    /**
    * Search All desa
    * @param keyword : mixed
    *
    * @return Integer
    *
    */
    public function count_all_search()
    {
        $keyword = $this->session->userdata('keyword');
        $this->db->from('desa');        
                
        $this->db->like('kdprov', $keyword);  
                
        $this->db->like('kdKab', $keyword);  
                
        $this->db->like('kdKec', $keyword);  
                
        $this->db->like('kode', $keyword);  
                
        $this->db->like('desa', $keyword);  
                
        $this->db->like('kodedesa', $keyword);  
        
        return $this->db->count_all_results();
    }


    
    
    
    /**
    *  Get One desa
    *
    *  @param id : Integer
    *
    *  @return array
    *
    */
    public function get_one($id) 
    {
        $this->db->where('id', $id);
        $result = $this->db->get('desa');

        if ($result->num_rows() == 1) 
        {
            return $result->row_array();
        } 
        else 
        {
            return array();
        }
    }

    

}

/* End of file pdpt_model.php */
/* Location: ./application/models/pdpt_model.php */ ?>