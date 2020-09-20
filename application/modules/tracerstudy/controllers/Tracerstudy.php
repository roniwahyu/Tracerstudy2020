<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tracerstudy extends Admin_Controller{
	function __construct(){
		parent::__construct();
		 if ($this->session->userdata("login") != TRUE) {
            $this->session->set_flashdata('login_notif','<p>You must be logged in</p>');
            //redirect('login', 'refresh');
        }
        //Load IgnitedDatatables Library
        $this->load->library(array('Datatables','template','Ion_auth/Ion_auth'));
        $this->load->model('jawab_mhss_model','jawabdb',TRUE);
        // $this->load->model('jawab_mhs/jawab_mhss','jawabdb',TRUE);
        // $this->load->model('site_model','sitedb',TRUE);
        $this->load->library('form_validation');
        $this->load->helper('url','form');
        
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
        $this->load->helper('language');
        
        if ( !$this->ion_auth->logged_in()): 
            redirect('auth/login', 'refresh');
        endif;

	}
    function index(){
        $this->mhs();
    }
	function indexx(){
        // echo frontend_url();
        // $this->load->config('config');
		// $this->template->set_themes(THEMES);
        $this->template->set_layout('narrow');
        $this->template->add_js('var baseurl="'.base_url('tracerstudy').'/";','embed');
        $this->template->add_js('var jawaburl="'.base_url().'jawab_mhs/";','embed');  
        $this->template->add_css('plugins/steps/jquery.steps.css');
        $this->template->add_css('animate.css');
        $this->template->add_css('style.css');
        $this->template->add_js('form-wizard.js');
        $this->template->add_js('plugins/staps/jquery.steps.min.js');
        $this->template->add_js('plugins/validate/jquery.validate.min.js');
        $this->template->add_js('modules/jawab_mhs.js');
        $this->template->add_js('crud.min.js');
        $this->template->add_js('datatables-setup.min.js');
         $user = $this->ion_auth->user()->row();
        $this->template->load_view('tracer',array('user'=>$user));

	}
    function _result($result){
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } 
        elseif($result->num_rows()>1){
            return $result->result_array();
        }else{
            return array();
        }
    }
    function getmhs($username){
        $this->db->select('a.*,a.telepon as telpomsmh,lower(a.email) as emailmsmh,a.nama as nmmhsmsmh,a.sesi as tahun_lulus,c.jurusan,c.kodedikti as kdpstmsmh')->from('mhsts2019 a')
             ->join('users b','a.nim=b.nim')
             ->join('jurusan c','a.jurusan=c.id')
             ->where('b.username',$username);
        $result=$this->db->get();
             // print_r($this->db->last_query());
        return $this->_result($result);

    }
     function cek_mhs($nim){
        $user=$this->ion_auth->user()->row();
        // $nim=$user->username;
        $id=$user->id;
        $mhs=$this->mdb->get_one_mhs($nim);
        // print_r($mhs);
        return $mhs;
    }
    function mhs(){
        $nim=$this->session->userdata('nim');
        // if(isset($nim) || !empty($nim) || $nim>0){
            // $this->template->set_layout('narrow');
            $this->template->add_js('var baseurl="'.base_url('jawab_mhs').'/";','embed');
            $this->template->add_js('var jawaburl="'.base_url().'jawab_mhs/";','embed');  
            $this->template->add_js('var memberurl="'.base_url().'members/";','embed');  
            $this->template->add_css('plugins/steps/jquery.steps.css');
            $this->template->add_css('animate.css');
            $this->template->add_css('style.css');
            $this->template->add_css('style.bundle.min.css');
            $this->template->add_js('form-wizard.js');
            $this->template->add_js('plugins/staps/jquery.steps.min.js');
            $this->template->add_js('plugins/validate/jquery.validate.min.js');
              // $this->template->add_js('plugins/dataTables/jquery.dataTables.js');
        // $this->template->add_js('plugins/dataTables/dataTables.bootstrap.js');
        // $this->template->add_js('plugins/dataTables/dataTables.responsive.js');
        // $this->template->add_css('plugins/datapicker/datepicker3.css');
        // $this->template->add_js('plugins/datapicker/bootstrap-datepicker.js');
        $this->template->add_js('modules/jawab_mhs.js');
        // $this->template->add_js('crud.min.js');
        $this->template->add_js('tracerstudy.js');
        // $this->template->add_js('datatables-setup.min.js');
        $this->load->config('config');
        // $this->template->set_themes(THEMES);
            // $this->session->set_userdata('nim',$nim);
         $user = $this->ion_auth->user()->row();
         $mhs=$this->getmhs($user->username);
         // print_r($user->nim);
         // print_r($mhs);
            $this->template->render('tracer',
                array(
                    'user'=>$user,
                    'detail'=>$mhs,
                ));
        // }
       
    }
    public function submit(){
        if ($this->input->post('ajax')){
          if ($this->input->post('id')){
            $this->jawabdb->update($this->input->post('id'));
          }else{
            $this->jawabdb->save();

          }

        }else{
          if ($this->input->post('submit')){
              if ($this->input->post('id')){
                $this->jawabdb->update($this->input->post('id'));
              }else{
                $this->jawabdb->save();
            $this->sukses();
              }
          }
        }
    }
    function sukses(){
        // redirect()
        $this->template->set_layout('narrow');
        $this->template->load_view('sukses',array());
    }
/*    public function submit(){
        if ($this->input->post('ajax')){
          if ($this->input->post('id')){
            $this->jawabdb->update($this->input->post('id'));
          }else{
            $this->jawabdb->save();
          }
            
        }else{
              if ($this->input->post('submit')){
                  if ($this->input->post('id')){
                    $this->jawabdb->update($this->input->post('id'));
                  }else{
                    $this->jawabdb->save();
                  }
              }
        }
        echo "sukses";


    }*/
        
    
    
}

 ?>