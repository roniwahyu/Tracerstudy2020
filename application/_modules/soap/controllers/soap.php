<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Soap extends Admin_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		 $this->dir_ws  = 'http://36.91.192.76:8082/ws/';
		  $ws = $this->dir_ws.'live.php?wsdl';
		  // :$this->dir_ws.'sandbox.php?wsdl';
                $ws_client = new nusoap_client($ws, true);
                // print_r($ws_client);
                $temp_proxy = $ws_client->getProxy();
                $temp_error = $ws_client->getError();
                $username=$temp_npsn="071030";
                $password="Uwgpatuhpdpt2015";
                if ($temp_proxy==NULL) {
                    $this->session->set_flashdata('error','Gagal melakukan koneksi ke Webservice Feeder.<br /><pre>'.$temp_error.'</pre>');
                    //$this->session->set_flashdata('error',$temp_error);
                    redirect(base_url());
                } else {
                    $temp_token = $temp_proxy->GetToken($username, $password);
                    if ($temp_token=='ERROR: username/password salah') {
                        $this->session->set_flashdata('error',$temp_token);
                        redirect(base_url());
                    } else {
                        //$temp_npsn = substr($username, 0,6);
                        // $temp_npsn = read_file('setting.ini');
                        //echo $temp_npsn;
                        
                        $filter_sp = "npsn = '".$temp_npsn."'";
                        $temp_sp = $temp_proxy->getrecord($temp_token,'satuan_pendidikan','071030');
                        //var_dump($temp_sp);
                        if ($temp_sp['result']) {
                            $id_sp = $temp_sp['result']['id_sp'];
                        } else {
                            $id_sp = '0';
                        }

                        $sessi = array('login' => TRUE, 
                                          'ws' => $ws,
                                       'token' => $temp_token,
                                    'username' => $username,
                                    'password' => $password,
                                         'url' => base_url(),
                                     'kode_pt' => '071030',
                                       'id_sp' => $id_sp);
                                        
                        $this->session->sess_expiration = '900'; //session expire 15 Minutes
                        $this->session->sess_expire_on_close = 'true';
                        
                        $this->session->set_userdata($sessi);
                        
                        var_dump($sessi);
                        redirect('ws/welcome');
                    }
                }

	}

}
	

/* End of file soap.php */
/* Location: ./application/modules/soap/controllers/soap.php */ 
?>