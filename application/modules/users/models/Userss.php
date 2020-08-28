<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of users
 * @created on : Saturday, 04-Apr-2020 12:06:20
 * @author DAUD D. SIMBOLON <daud.simbolon@gmail.com>
 * Copyright 2020    
 */
 
 
class Userss extends CI_Model 
{

    public function __construct() 
    {
        parent::__construct();
    }


    /**
     *  Get All data users
     *
     *  @param limit  : Integer
     *  @param offset : Integer
     *
     *  @return array
     *
     */
      function activate($id){
        $data=[
             'isactive' => '1',
        ];
        $this->db->where('id', $id);
        $this->db->update('users', $data);
        return $this->db->affected_rows();
    }   
    function deactivate($id){
        $data=[
             'isactive' => '0',
        ];
        $this->db->where('id', $id);
        $this->db->update('users', $data);
        return $this->db->affected_rows();
    }
    function __dropdown__(){
        $result = array();
        $array_keys_values = $this->db->get('users')->result();
        $result[0]="-- Pilih users --";
        foreach ($array_keys_values->result() as $row)
        {
            $result[$row->id]= $row->id." (".$row->id.")" ;
        }
        return $result;
    }

    public function get_all($limit, $offset) 
    {

        $result = $this->db->get('users', $limit, $offset);

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
     *  Count All users
     *    
     *  @return Integer
     *
     */
    public function count_all()
    {
        $this->db->from('users');
        return $this->db->count_all_results();
    }
    

    /**
    * Search All users
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
                
        $this->db->like('ip_address', $keyword);  
                
        $this->db->like('username', $keyword);  
                
        $this->db->like('password', $keyword);  
                
        $this->db->like('email', $keyword);  
                
        $this->db->like('activation_selector', $keyword);  
                
        $this->db->like('activation_code', $keyword);  
                
        $this->db->like('forgotten_password_selector', $keyword);  
                
        $this->db->like('forgotten_password_code', $keyword);  
                
        $this->db->like('remember_selector', $keyword);  
                
        $this->db->like('remember_code', $keyword);  
                
        $this->db->like('first_name', $keyword);  
                
        $this->db->like('last_name', $keyword);  
                
        $this->db->like('company', $keyword);  
                
        $this->db->like('phone', $keyword);  
                
        $this->db->like('oauth_provider', $keyword);  
                
        $this->db->like('oauth_uid', $keyword);  
                
        $this->db->like('gender', $keyword);  
                
        $this->db->like('locale', $keyword);  
                
        $this->db->like('avatar', $keyword);  
                
        $this->db->like('picture', $keyword);  
                
        $this->db->like('link', $keyword);  
                
        $this->db->like('salt', $keyword);  
                
        $this->db->like('nik', $keyword);  
                
        $this->db->like('norm', $keyword);  
        
        $this->db->limit($limit, $offset);
        $result = $this->db->get('users');

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
    * Search All users
    * @param keyword : mixed
    *
    * @return Integer
    *
    */
    public function count_all_search()
    {
        $keyword = $this->session->userdata('keyword');
        $this->db->from('users');        
                
        $this->db->like('ip_address', $keyword);  
                
        $this->db->like('username', $keyword);  
                
        $this->db->like('password', $keyword);  
                
        $this->db->like('email', $keyword);  
                
        $this->db->like('activation_selector', $keyword);  
                
        $this->db->like('activation_code', $keyword);  
                
        $this->db->like('forgotten_password_selector', $keyword);  
                
        $this->db->like('forgotten_password_code', $keyword);  
                
        $this->db->like('remember_selector', $keyword);  
                
        $this->db->like('remember_code', $keyword);  
                
        $this->db->like('first_name', $keyword);  
                
        $this->db->like('last_name', $keyword);  
                
        $this->db->like('company', $keyword);  
                
        $this->db->like('phone', $keyword);  
                
        $this->db->like('oauth_provider', $keyword);  
                
        $this->db->like('oauth_uid', $keyword);  
                
        $this->db->like('gender', $keyword);  
                
        $this->db->like('locale', $keyword);  
                
        $this->db->like('avatar', $keyword);  
                
        $this->db->like('picture', $keyword);  
                
        $this->db->like('link', $keyword);  
                
        $this->db->like('salt', $keyword);  
                
        $this->db->like('nik', $keyword);  
                
        $this->db->like('norm', $keyword);  
        
        return $this->db->count_all_results();
    }


    
    
    
    /**
    *  Get One users
    *
    *  @param id : Integer
    *
    *  @return array
    *
    */
    public function get_one($id) 
    {
        $this->db->where('id', $id);
        $result = $this->db->get('users');

        if ($result->num_rows() == 1) 
        {
            return $result->row_array();
        } 
        else 
        {
            return array();
        }
    }

    
    
    
    /**
    *  Default form data users
    *  @return array
    *
    */
    public function add()
    {
        $data = array(
            
                'ip_address' => '',
            
                'username' => '',
            
                'password' => '',
            
                'email' => '',
            
                'activation_selector' => '',
            
                'activation_code' => '',
            
                'forgotten_password_selector' => '',
            
                'forgotten_password_code' => '',
            
                'forgotten_password_time' => '',
            
                'remember_selector' => '',
            
                'remember_code' => '',
            
                'created_on' => '',
            
                'last_login' => '',
            
                'active' => '',
            
                'first_name' => '',
            
                'last_name' => '',
            
                'company' => '',
            
                'phone' => '',
            
                'oauth_provider' => '',
            
                'oauth_uid' => '',
            
                'gender' => '',
            
                'locale' => '',
            
                'avatar' => '',
            
                'picture' => '',
            
                'picture_blob' => '',
            
                'link' => '',
            
                'token' => '',
            
                'salt' => '',
            
                'nik' => '',
            
                'norm' => '',
            
                'datetime' => '',
            
                'created' => '',
            
        );
        //'created' => NOW(),
        //'modified' => NOW(),
        //'userid' => userid(),
        return $data;
    }

    
    
    
    
    /**
    *  Save data Post
    *
    *  @return void
    *
    */
    public function save() 
    {
        $data = array(
        
            'ip_address' => strip_tags($this->input->post('ip_address', TRUE)),
        
            'username' => strip_tags($this->input->post('username', TRUE)),
        
            'password' => strip_tags($this->input->post('password', TRUE)),
        
            'email' => strip_tags($this->input->post('email', TRUE)),
        
            'activation_selector' => strip_tags($this->input->post('activation_selector', TRUE)),
        
            'activation_code' => strip_tags($this->input->post('activation_code', TRUE)),
        
            'forgotten_password_selector' => strip_tags($this->input->post('forgotten_password_selector', TRUE)),
        
            'forgotten_password_code' => strip_tags($this->input->post('forgotten_password_code', TRUE)),
        
            'forgotten_password_time' => strip_tags($this->input->post('forgotten_password_time', TRUE)),
        
            'remember_selector' => strip_tags($this->input->post('remember_selector', TRUE)),
        
            'remember_code' => strip_tags($this->input->post('remember_code', TRUE)),
        
            'created_on' => strip_tags($this->input->post('created_on', TRUE)),
        
            'last_login' => strip_tags($this->input->post('last_login', TRUE)),
        
            'active' => strip_tags($this->input->post('active', TRUE)),
        
            'first_name' => strip_tags($this->input->post('first_name', TRUE)),
        
            'last_name' => strip_tags($this->input->post('last_name', TRUE)),
        
            'company' => strip_tags($this->input->post('company', TRUE)),
        
            'phone' => strip_tags($this->input->post('phone', TRUE)),
        
            'oauth_provider' => strip_tags($this->input->post('oauth_provider', TRUE)),
        
            'oauth_uid' => strip_tags($this->input->post('oauth_uid', TRUE)),
        
            'gender' => strip_tags($this->input->post('gender', TRUE)),
        
            'locale' => strip_tags($this->input->post('locale', TRUE)),
        
            'avatar' => strip_tags($this->input->post('avatar', TRUE)),
        
            'picture' => strip_tags($this->input->post('picture', TRUE)),
        
            'picture_blob' => strip_tags($this->input->post('picture_blob', TRUE)),
        
            'link' => strip_tags($this->input->post('link', TRUE)),
        
            'token' => strip_tags($this->input->post('token', TRUE)),
        
            'salt' => strip_tags($this->input->post('salt', TRUE)),
        
            'nik' => strip_tags($this->input->post('nik', TRUE)),
        
            'norm' => strip_tags($this->input->post('norm', TRUE)),
        
            'datetime' => strip_tags($this->input->post('datetime', TRUE)),
        
            'created' => strip_tags($this->input->post('created', TRUE)),
        
        );
        
        //'created' => NOW(),
        //'modified' => NOW(),
        //'userid' => userid(),

        $this->db->insert('users', $data);
    }
    
    
    

    
    /**
    *  Update modify data
    *
    *  @param id : Integer
    *
    *  @return void
    *
    */
    public function update($id)
    {
        $data = array(
        
                'ip_address' => strip_tags($this->input->post('ip_address', TRUE)),
        
                'username' => strip_tags($this->input->post('username', TRUE)),
        
                'password' => strip_tags($this->input->post('password', TRUE)),
        
                'email' => strip_tags($this->input->post('email', TRUE)),
        
                'activation_selector' => strip_tags($this->input->post('activation_selector', TRUE)),
        
                'activation_code' => strip_tags($this->input->post('activation_code', TRUE)),
        
                'forgotten_password_selector' => strip_tags($this->input->post('forgotten_password_selector', TRUE)),
        
                'forgotten_password_code' => strip_tags($this->input->post('forgotten_password_code', TRUE)),
        
                'forgotten_password_time' => strip_tags($this->input->post('forgotten_password_time', TRUE)),
        
                'remember_selector' => strip_tags($this->input->post('remember_selector', TRUE)),
        
                'remember_code' => strip_tags($this->input->post('remember_code', TRUE)),
        
                'created_on' => strip_tags($this->input->post('created_on', TRUE)),
        
                'last_login' => strip_tags($this->input->post('last_login', TRUE)),
        
                'active' => strip_tags($this->input->post('active', TRUE)),
        
                'first_name' => strip_tags($this->input->post('first_name', TRUE)),
        
                'last_name' => strip_tags($this->input->post('last_name', TRUE)),
        
                'company' => strip_tags($this->input->post('company', TRUE)),
        
                'phone' => strip_tags($this->input->post('phone', TRUE)),
        
                'oauth_provider' => strip_tags($this->input->post('oauth_provider', TRUE)),
        
                'oauth_uid' => strip_tags($this->input->post('oauth_uid', TRUE)),
        
                'gender' => strip_tags($this->input->post('gender', TRUE)),
        
                'locale' => strip_tags($this->input->post('locale', TRUE)),
        
                'avatar' => strip_tags($this->input->post('avatar', TRUE)),
        
                'picture' => strip_tags($this->input->post('picture', TRUE)),
        
                'picture_blob' => strip_tags($this->input->post('picture_blob', TRUE)),
        
                'link' => strip_tags($this->input->post('link', TRUE)),
        
                'token' => strip_tags($this->input->post('token', TRUE)),
        
                'salt' => strip_tags($this->input->post('salt', TRUE)),
        
                'nik' => strip_tags($this->input->post('nik', TRUE)),
        
                'norm' => strip_tags($this->input->post('norm', TRUE)),
        
                'datetime' => strip_tags($this->input->post('datetime', TRUE)),
        
                'created' => strip_tags($this->input->post('created', TRUE)),
        
        );
        
        
        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }


    
    
    
    /**
    *  Delete data by id
    *
    *  @param id : Integer
    *
    *  @return void
    *
    */
    public function destroy($id)
    {       
        $this->db->where('id', $id);
        $this->db->delete('users');
        
    }







    



}
