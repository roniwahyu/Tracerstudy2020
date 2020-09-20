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
     
        // $this->template->add_js('crud.js');
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
        // $this->template->add_js(
        	// "var jsurl='".assets_url('js')."/';
        	// var baseurl='".base_url()."/';
        	// ",'embed');
        $this->template->add_js('ts.js');
        $this->template->render('site',array(
            // 'element'=>'register',
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
    function klaimnim(){
        $user = $this->ion_auth->user()->row();
        // print_r($user->email);
        // print_r(!empty($this->input->post('nim')));
        if(!empty($this->input->post('nim'))){
            print_r($this->input->post('nim'));
            $nim=$this->input->post('nim');
            $email=$user->email;
            // print_r($email);
            print_r($this->cek_nim_email($nim,$user->email));
        }else{

            $this->load->view('form_nim');
        }
    }
    function cek_nim_email($nim,$email){
        if(!empty($nim) || !empty($email)){
            if(!empty($data=$this->mdb->ceknimemail($email,$nim))):
                $this->update_nim_users($email,$nim);
                return $data=['error_code'=>'0','error_desc'=>'','data'=>$data];

            else:
                return $data=['error_code'=>'9001','error_desc'=>'NIM dan Email tidak sesuai dengan database kami, silakan hubungi Administrator tracer@widyagama.ac.id'];
            endif;
            
        }else{
            return false;
        }
    }
    function update_nim_users($email,$nim){
        $data=[
            'nim'=>$nim,
            'claimed'=>NOW(),
            'isclaimed'=>1,
            'email_activated'=>1
        ];
        if(!empty($result=$this->mdb->update_nim_email($data,$email))){
            return $data=['error_code'=>'0','error_desc'=>'','data'=>$result];

        }else{
            return $data=['error_code'=>'1001','error_desc'=>'Tidak dapat mengupdate data NIM dan User, silakan hubungi Administrator tracer@widyagama.ac.id'];
        }


    }

    

    

    
}

 ?>
