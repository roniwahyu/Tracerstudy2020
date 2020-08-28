<?php 

class Members extends Admin_Controller{
	function __construct(){
		parent::__construct();
		
        //Load IgnitedDatatables Library
       
        $this->load->model('members_model','mdb',TRUE);
       
     
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
        $this->template->set_title('Aplikasi Tracer Study');
        // $this->template->set_layout('home');
     
        $this->template->add_js('crud.js');
        $user = $this->ion_auth->user()->row();
        $datax=array();
        // print_r($user->username);
        $mhs=$this->cek_mhs($user->username);
        // print_r($mhs);
        if(!empty($mhs)):
            $this->session->set_userdata('nim',$mhs['nim']);
            $mhs=$mhs;
        else:
            $this->session->set_userdata('nim','0');
            $mhs=array();
        endif;
        $this->template->load_view('site',array(
            'element'=>'register',
            // 'data'=>$datax,
            // 'heading_data'=>'Welcome',

            'mhs'=>$mhs,
            ));

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
