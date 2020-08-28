<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Members extends Admin_Controller{
	function __construct(){
		parent::__construct();
		
        //Load IgnitedDatatables Library
        // $this->temp->set_theme(THEMES);
        // $this->temp->set_layout('login');
       
        $this->load->model('pdpt_model','pdb',TRUE);
       
     
        if ( !$this->ion_auth->logged_in()): 
                    redirect('auth/login', 'refresh');
        else:
            //Officers
            if(!$this->ion_auth->in_group(2)){
                redirect('auth/login', 'refresh');
            }
        endif;
      
	}
	function index(){
     
        // $user = $this->ion_auth->user()->row();
        $datax=array();
        // print_r($user->username);
        // $mhs=$this->cek_mhs($user->username);
        // print_r($mhs);
        $data=$this->pdb->getview('01-view-prodi');
        print_r($data);

        
        // $this->template->render('site',$data);

    }
    function cek_mhs($nim){
        $user=$this->ion_auth->user()->row();
        // $nim=$user->username;
        $id=$user->id;
        $mhs=$this->mdb->get_one_mhs($nim);
        // print_r($mhs);
        return $mhs;
    }

    function isi_form($nim){

    }

    

    

    
}

 ?>
