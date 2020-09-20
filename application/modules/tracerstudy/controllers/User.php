<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Admin_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model','udb',true);
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);
		$this->load->model('ion_auth_model','authdb',true);
		$this->temp->set_theme(THEMES);
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
		//Do your magic here
	}
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
	public function index()
	{
		
	}

	public function claim($hash)
	{
		# code...

	}
	public function activate($hash)
	{
		# code...
		$hashing=$this->gethash($hash);
		// print_r($hashing);
		if(!empty($hashing['data'])){

			$nim=$hashing['data']['nim'];
			$mhs=$this->getmhs($nim);
			$nama=($this->split_name($mhs['data']['nama']));
			// $password="@".(substr($mhs['data']['nim'],0,8));
			$password="@passwordnyagoogle123456#";
			$data=[
				'email'=>!empty($mhs['data']['email'])?$mhs['data']['email']:'roniwahyu@gmail.com',
				'identity'=>!empty($mhs['data']['email'])?$mhs['data']['email']:$mhs['data']['nim'],
				'password'=>$password,
				'additional_data'=>[
					'first_name'=>$nama[0],
					'last_name'=>!empty($nama[1])?$nama[1]:$nama,
					'company'=>$mhs['data']['prodi'],
					'phone'=>!empty($mhs['data']['telp'])?$mhs['data']['telp']:'0123456789',
					'nim'=>$nim,
					'claimed'=>NOW(),
					'created'=>NOW(),
				],
			];
			echo "<pre>";
			print_r($data);
			echo "</pre>";
			$this->create_user($data);
		}else{

			// print_r($hashing);
		}


	}
	function split_name($name) {
	    $name = trim($name);
	    $last_name = ucfirst((strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name));
	    $first_name = ucfirst(trim( preg_replace('#'.$last_name.'#', '', $name ) ));
	    return array($first_name, $last_name);
	}
	function result_json($data){

	}
	function gethash($hash){
		$hashing=$this->udb->gethash($hash);
		print_r($hashing);
		if(!empty($hashing)){
			if(!empty($hashing['nim'])){
				$nim=$hashing['nim'];

				$hashx=$hashing['hashing'];
				$data=[
					'error_id'=>false,
					'error_desc'=>false,
					'data'=>[	
						'nim'=>$nim
					]

				];

			}else{
				$data=[
				'error_id'=>'002',
				'error_desc'=>'Data NIM tidak tersedia',
				'data'=>array(),
			];
			}
		}else{
			$data=[
				'error_id'=>'001',
				'error_desc'=>'Data tidak ditemukan',
				'data'=>array(),
			];


		}
		return $data;
	}
	function getmhs($nim){
		$mhs=$this->udb->getmhs($nim);
		// print_r($mhs);
		if(!empty($mhs)){
			if(!empty($mhs['nim'])){
				$nim=$mhs['nim'];
				
				$data=[
					'error_id'=>false,
					'error_desc'=>false,
					'data'=>$mhs,

				];

			}else{
				$data=[
				'error_id'=>'003',
				'error_desc'=>'Data Alumni tidak tersedia',
				'data'=>array(),
			];
			}
		}else{
			$data=[
				'error_id'=>'001',
				'error_desc'=>'Data tidak ditemukan',
				'data'=>array(),
			];


		}
		return $data;
	}

	public function create_user($data){

		if(!empty($data)){
			
			print_r($data); 
			$email = strtolower($data['email']);
			// $identity = ($identity_column === 'email') ? $email : $data['identity'];
			$password = $data['password'];
			$identity = $data['identity'];

			

			if(!$this->authdb->identity_check($data['email'])){
				$this->ion_auth->register($identity, $password, $email, $data['additional_data']);
			}
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			// redirect("auth", 'refresh');
		
		}
	}


}

/* End of file User.php */
/* Location: ./application/modules/tracerstudy/controllers/User.php */ ?>