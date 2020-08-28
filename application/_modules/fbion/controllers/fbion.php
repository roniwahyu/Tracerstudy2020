<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fbion extends Admin_Controller {

    function __construct(){
        parent::__construct();
        // $this->load->config('facebook_ion_auth');
        $this->load->library('facebook_ion_auth');
             if (uri_string() != 'auth/login') {
                $this->_is_login();
            }

    }
    function index()
        {
            $this->facebook_ion_auth->login();
        }

        /**
         * Controller that is redirected back from facebook after login
         */
        public function action()
        {
            $code = $this->input->get('code');
            if ($code) {
                $this->facebook_ion_auth->login();
                redirect('/');
            } else {
                redirect('auth/login');
            }
        }

        

        private function _is_login()
        {
            if (!$this->ion_auth->logged_in()) {
                redirect('auth/login');
            }
        }
}

/* End of file Controllername.php */

?>
