<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * WS Client Feeder Kebutuhan Module
 * 
 * @author      Yusuf Ayuba
 * @copyright   2015
 * @Url         http://jago.link
 * @Github      https://github.com/virbo/wsfeeder
 * 
 */
 
class Ref_kebutuhan extends CI_Controller {
        
    private $ws_client;
    private $temp_proxy;
    private $limit;
    private $filter;
    private $order;
    private $offset;
    private $tabel;
    
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('login')) {
            redirect('ws');
        } else {
            $this->ws_client = new nusoap_client($this->session->userdata('ws'), true);
            $this->temp_proxy = $this->ws_client->getProxy();
            $this->limit = $this->config->item('limit');
            $this->filter = $this->config->item('filter');
            $this->order = $this->config->item('order');
            $this->offset = $this->config->item('offset');
            $this->tabel = 'kebutuhan_khusus';
            $this->load->model('m_feeder','feeder');
        }
    }
    
    public function index()
    {
        $this->view();
    }
    
    public function view($offset=0)
    {
        $temp_dir = $this->temp_proxy->GetDictionary($this->session->userdata('token'), $this->tabel);
        
        $temp_keb = $this->input->post('nm_keb');
        if ($temp_keb=='') {
            
            $temp_rec = $this->temp_proxy->GetRecordset($this->session->userdata('token'), 
                                                        $this->tabel, $this->filter, 
                                                        $this->order, $this->limit, 
                                                        $offset
                                                     );
            $temp_count = $this->feeder->count_all($this->session->userdata('token'), $this->tabel,$this->filter);
            
            $temp_jml = $temp_count['result'];
            
            $data['temp_keb'] = '';
        } else {
            $filter_keb = "nm_kk like '%".$temp_keb."%'";
            $temp_rec = $this->feeder->getrset($this->session->userdata('token'), 
                                                            $this->tabel, $filter_keb, 
                                                            $this->order, $this->limit, 
                                                            $offset
                                                         );
            $temp_count = $this->feeder->count_all($this->session->userdata('token'), $this->tabel,$filter_keb);
            $temp_jml = $temp_count['result'];
            
            $data['temp_keb'] = $temp_keb;
        }

        //pagination
        $config['base_url'] = site_url('ref_kebutuhan/view');
        $config['total_rows'] = $temp_count['result'];
        $config['per_page'] = $this->limit;
        $config['uri_segment'] = 3;
        $this->pagination->initialize($config);
        //
        $data['pagination'] = $this->pagination->create_links();
        $data['offset'] = $offset;
        
        $data['temp_error'] = $temp_rec['error_desc'];
        $data['listsdic'] = $temp_dir['result'];
        $data['listsrec'] = $temp_rec['result'];
        $data['total'] = $temp_count['result'];
        
        $offset==0? $start=$this->pagination->cur_page: $start=$offset+1;
        $data['start'] = $start;
        $data['end'] = $this->pagination->cur_page * $this->pagination->per_page;
        
        tampil('ref/__view_kebutuhan',$data);
    }
}

/* End of file ref_kebutuhan.php */
/* Location: ./application/controllers/ref_kebutuhan.php */