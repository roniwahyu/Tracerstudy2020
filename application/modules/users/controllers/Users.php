<?php if (!defined('BASEPATH'))  exit('No direct script access allowed');

/**
 * Controller users
 * @created on : Saturday, 04-Apr-2020 12:06:20
 * @author Daud D. Simbolon <daud.simbolon@gmail.com>
 * @editor Jovin <hijovin@gmail.com>
 * Copyright 2020
 */

class Users extends Admin_Controller
{

    public function __construct() 
    {
        parent::__construct();         
        $this->load->model('userss');
    }
    

    /**
    * List all data users
    *
    */
    public function index() 
    {
        $config = array(
            'base_url'          => site_url('users/index/'),
            'total_rows'        => $this->userss->count_all(),
            'per_page'          => $this->config->item('per_page'),
            'uri_segment'       => 3,
            'num_links'         => 9,
            'use_page_numbers'  => FALSE
            
        );
        
        $this->pagination->initialize($config);
        $data['total']          = $config['total_rows'];
        $data['pagination']     = $this->pagination->create_links();
        $data['number']         = (int)$this->uri->segment(3) +1;
        $data['userss']       = $this->userss->get_all($config['per_page'], $this->uri->segment(3));

        $this->template->add_js('
            var dtables;
            var baseurl="'.base_url('users').'/";
            var jsurl="'.assets_url('js').'/";
            dtables=$("#datatables").DataTable({
                "ajax":{
                    "url":baseurl+"getdtables",
                    "dataType": "json",
                    
                }, 
            "sServerMethod": "POST",
            "bServerSide": true,
            "bAutoWidth": true,
            "bDeferRender": true,
            "bSortClasses": false,
            "responsive": true,
            "scrollX": true,
            "sScrollX": true,
            "columns":[
                {"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},{"searchable":true},
                
              
               
                ]
                
                });
            ','embed');
        $this->template->add_js('apps.js');
       
        $this->template->render('users/view',$data);
	      
    }
    public function getdtables(){
        header('Content-Type: application/json');
        $this->dtables->select('ip_address,username,password,email,activation_selector,activation_code,forgotten_password_selector,forgotten_password_code,forgotten_password_time,remember_selector,remember_code,created_on,last_login,active,first_name,last_name,company,phone,oauth_provider,oauth_uid,gender,locale,avatar,picture,picture_blob,link,token,salt,nik,norm,datetime,created,')->from('users');
        $show=base_url('users/show/');
        $edit=base_url('users/edit/');
        $target="#kt_modal_4";

        $this->dtables->add_column('aksi','<div class="btn-group">$1 $2 $3</div>','viewbtn(id,'.$show.','.$target.'),editbtn(id,'.$edit.','.$target.'),delbtn(id)');

        echo $this->dtables->generate();
    }
    

    /**
    * Call Form to Add  New users
    *
    */
    public function add() 
    {       
        $data['users'] = $this->userss->add();
        $data['action']  = 'users/save';
        
      
      
        $this->template->render('users/form',$data);
    }

    /**
    * Call Form to Modify users
    *
    */
    public function edit($id='') 
    {
        //$id=$this->input->post('id'); 
        if ($id != '') 
        {

            $data['users']      = $this->userss->get_one($id);
            $data['action']       = 'users/save/' . $id;           
      
            $this->template->add_js('
                     $(document).ready(function(){
                    // binds form submission and fields to the validation engine
                    $("#form_users").parsley();
                                    });','embed');
            
            $this->template->render('users/form',$data);
            
        }
        else 
        {
            $this->session->set_flashdata('notify', notify('Data tidak ditemukan','info'));
            redirect(site_url('users'));
        }
    }


    
    /**
    * Save & Update data  users
    *
    */
    public function save($id =NULL) 
    {
        $id=$this->input->post('id');
        // validation config
        $config = array(
                  
                    array(
                        'field' => 'ip_address',
                        'label' => 'Ip Address',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'username',
                        'label' => 'Username',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'activation_selector',
                        'label' => 'Activation Selector',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'activation_code',
                        'label' => 'Activation Code',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'forgotten_password_selector',
                        'label' => 'Forgotten Password Selector',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'forgotten_password_code',
                        'label' => 'Forgotten Password Code',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'forgotten_password_time',
                        'label' => 'Forgotten Password Time',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'remember_selector',
                        'label' => 'Remember Selector',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'remember_code',
                        'label' => 'Remember Code',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'created_on',
                        'label' => 'Created On',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'last_login',
                        'label' => 'Last Login',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'active',
                        'label' => 'Active',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'first_name',
                        'label' => 'First Name',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'last_name',
                        'label' => 'Last Name',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'company',
                        'label' => 'Company',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'phone',
                        'label' => 'Phone',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'oauth_provider',
                        'label' => 'Oauth Provider',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'oauth_uid',
                        'label' => 'Oauth Uid',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'gender',
                        'label' => 'Gender',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'locale',
                        'label' => 'Locale',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'avatar',
                        'label' => 'Avatar',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'picture',
                        'label' => 'Picture',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'picture_blob',
                        'label' => 'Picture Blob',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'link',
                        'label' => 'Link',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'token',
                        'label' => 'Token',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'salt',
                        'label' => 'Salt',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'nik',
                        'label' => 'Nik',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'norm',
                        'label' => 'Norm',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'datetime',
                        'label' => 'Datetime',
                        'rules' => 'trim'
                        ),
                    
                    array(
                        'field' => 'created',
                        'label' => 'Created',
                        'rules' => 'trim'
                        ),
                               
                  );
            
        // if id NULL then add new data
        if(!$id)
        {    
                  $this->form_validation->set_rules($config);

                  if ($this->form_validation->run() == TRUE) 
                  {
                      if ($this->input->post()) 
                      {
                          
                          $this->userss->save();
                          $this->session->set_flashdata('notify', notify('Data berhasil ditambahkan','success'));
                          print_r(statusfy('1'));
                      }
                  } 
                  else // If validation incorrect 
                  {
                      $this->add();
                      print_r(statusfy('0',validation_errors()));
                  }
         }
         else // Update data if Form Edit send Post and ID available
         {               
                $this->form_validation->set_rules($config);

                if ($this->form_validation->run() == TRUE) 
                {
                    if ($this->input->post()) 
                    {
                        $this->userss->update($id);
                        $this->session->set_flashdata('notify', notify('Data berhasil diupdate','success'));
                        print_r(statusfy('1'));
                    }
                } 
                else // If validation incorrect 
                {
                    $this->edit($id);
                    print_r(statusfy('0',validation_errors()));
                }
         }
    }
    
    /**
    * Detail users
    *
    */
    public function show($id='') 
    {
        if ($id != '') 
        {
            $data['users'] = $this->userss->get_one($id);            
            $this->template->render('users/show',$data);
            
        }
        else 
        {
            $this->session->set_flashdata('notify', notify('Data tidak ditemukan','info'));
            redirect(site_url('users'));
        }
    }
    
    /**
    * Search users like ""
    *
    */   
    public function search()
    {
        if($this->input->post('q'))
        {
            $keyword = $this->input->post('q');
            
            $this->session->set_userdata(
                        array('keyword' => $this->input->post('q',TRUE))
                    );
        }
        
         $config = array(
            'base_url'          => site_url('users/search/'),
            'total_rows'        => $this->userss->count_all_search(),
            'per_page'          => $this->config->item('per_page'),
            'uri_segment'       => 3,
            'num_links'         => 9,
            'use_page_numbers'  => FALSE
        );
        
        $this->pagination->initialize($config);
        $data['total']          = $config['total_rows'];
        $data['number']         = (int)$this->uri->segment(3) +1;
        $data['pagination']     = $this->pagination->create_links();
        $data['userss']       = $this->userss->get_search($config['per_page'], $this->uri->segment(3));
       
        $this->template->render('users/view',$data);
    }
    
    /**
    * Delete users by ID
    *
    */
    public function destroy($id) 
    {        
        // Agar tabel dengan ID 0 bisa terhapus
        if ($id>=0) 
        {
            $this->userss->destroy($id);           
            $this->session->set_flashdata('notify', notify('Data berhasil dihapus','success'));
            print_r(statusfy('1'));
        }

    }
    public function activate(){
        $id=$this->input->post('id');
        $this->userss->activate($id);

    } 
    public function deactivate(){
        $id=$this->input->post('id');
        $this->userss->deactivate($id);
        
    }
}
?>