<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of jawab_mhs
 * @created on : Saturday, 06-Jul-2019 02:55:13
 * @author DAUD D. SIMBOLON <daud.simbolon@gmail.com>
 * Copyright 2019    
 */
 
 
class Jawab_mhss extends CI_Model 
{

    public function __construct() 
    {
        parent::__construct();
    }


    /**
     *  Get All data jawab_mhs
     *
     *  @param limit  : Integer
     *  @param offset : Integer
     *
     *  @return array
     *
     */
    public function get_all($limit, $offset) 
    {

        $result = $this->db->get('jawab_mhs', $limit, $offset);

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
     *  Count All jawab_mhs
     *    
     *  @return Integer
     *
     */
    public function count_all()
    {
        $this->db->from('jawab_mhs');
        return $this->db->count_all_results();
    }
    

    /**
    * Search All jawab_mhs
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
                
        $this->db->like('kdptimsmh', $keyword);  
                
        $this->db->like('kdpstmsmh', $keyword);  
                
        $this->db->like('nimhsmsmh', $keyword);  
                
        $this->db->like('nmmhsmsmh', $keyword);  
                
        $this->db->like('telpomsmh', $keyword);  
                
        $this->db->like('emailmsmh', $keyword);  
                
        $this->db->like('tahun_lulus', $keyword);  
                
        $this->db->like('f301', $keyword);  
                
        $this->db->like('f302', $keyword);  
                
        $this->db->like('f303', $keyword);  
                
        $this->db->like('f401', $keyword);  
                
        $this->db->like('f402', $keyword);  
                
        $this->db->like('f403', $keyword);  
                
        $this->db->like('f404', $keyword);  
                
        $this->db->like('f405', $keyword);  
                
        $this->db->like('f406', $keyword);  
                
        $this->db->like('f407', $keyword);  
                
        $this->db->like('f408', $keyword);  
                
        $this->db->like('f409', $keyword);  
                
        $this->db->like('f410', $keyword);  
                
        $this->db->like('f411', $keyword);  
                
        $this->db->like('f412', $keyword);  
                
        $this->db->like('f413', $keyword);  
                
        $this->db->like('f414', $keyword);  
                
        $this->db->like('f415', $keyword);  
                
        $this->db->like('f416', $keyword);  
                
        $this->db->like('f6', $keyword);  
                
        $this->db->like('f501', $keyword);  
                
        $this->db->like('f502', $keyword);  
                
        $this->db->like('f503', $keyword);  
                
        $this->db->like('f7', $keyword);  
                
        $this->db->like('f7a', $keyword);  
                
        $this->db->like('f8', $keyword);  
                
        $this->db->like('f901', $keyword);  
                
        $this->db->like('f902', $keyword);  
                
        $this->db->like('f903', $keyword);  
                
        $this->db->like('f904', $keyword);  
                
        $this->db->like('f905', $keyword);  
                
        $this->db->like('f906', $keyword);  
                
        $this->db->like('f1001', $keyword);  
                
        $this->db->like('f1002', $keyword);  
                
        $this->db->like('f1101', $keyword);  
                
        $this->db->like('f1102', $keyword);  
                
        $this->db->like('f1201', $keyword);  
                
        $this->db->like('f1202', $keyword);  
                
        $this->db->like('f1301', $keyword);  
                
        $this->db->like('f1302', $keyword);  
                
        $this->db->like('f1303', $keyword);  
                
        $this->db->like('f14', $keyword);  
                
        $this->db->like('f15', $keyword);  
                
        $this->db->like('f1601', $keyword);  
                
        $this->db->like('f1602', $keyword);  
                
        $this->db->like('f1603', $keyword);  
                
        $this->db->like('f1604', $keyword);  
                
        $this->db->like('f1605', $keyword);  
                
        $this->db->like('f1606', $keyword);  
                
        $this->db->like('f1607', $keyword);  
                
        $this->db->like('f1608', $keyword);  
                
        $this->db->like('f1609', $keyword);  
                
        $this->db->like('f1610', $keyword);  
                
        $this->db->like('f1611', $keyword);  
                
        $this->db->like('f1612', $keyword);  
                
        $this->db->like('f1613', $keyword);  
                
        $this->db->like('f1614', $keyword);  
                
        $this->db->like('f1701', $keyword);  
                
        $this->db->like('f1702b', $keyword);  
                
        $this->db->like('f1703', $keyword);  
                
        $this->db->like('f1704b', $keyword);  
                
        $this->db->like('f1705', $keyword);  
                
        $this->db->like('f1705a', $keyword);  
                
        $this->db->like('f1706', $keyword);  
                
        $this->db->like('f1706ba', $keyword);  
                
        $this->db->like('f1707', $keyword);  
                
        $this->db->like('f1708b', $keyword);  
                
        $this->db->like('f1709', $keyword);  
                
        $this->db->like('f1710b', $keyword);  
                
        $this->db->like('f1711', $keyword);  
                
        $this->db->like('f1711a', $keyword);  
                
        $this->db->like('f1712b', $keyword);  
                
        $this->db->like('f1712a', $keyword);  
                
        $this->db->like('f1713', $keyword);  
                
        $this->db->like('f1714b', $keyword);  
                
        $this->db->like('f1715', $keyword);  
                
        $this->db->like('f1716b', $keyword);  
                
        $this->db->like('f1717', $keyword);  
                
        $this->db->like('f1718b', $keyword);  
                
        $this->db->like('f1719', $keyword);  
                
        $this->db->like('f1720b', $keyword);  
                
        $this->db->like('f1721', $keyword);  
                
        $this->db->like('f1722b', $keyword);  
                
        $this->db->like('f1723', $keyword);  
                
        $this->db->like('f1724b', $keyword);  
                
        $this->db->like('f1725', $keyword);  
                
        $this->db->like('f1726b', $keyword);  
                
        $this->db->like('f1727', $keyword);  
                
        $this->db->like('f1728b', $keyword);  
                
        $this->db->like('f1729', $keyword);  
                
        $this->db->like('f1730b', $keyword);  
                
        $this->db->like('f1731', $keyword);  
                
        $this->db->like('f1732b', $keyword);  
                
        $this->db->like('f1733', $keyword);  
                
        $this->db->like('f1734b', $keyword);  
                
        $this->db->like('f1735', $keyword);  
                
        $this->db->like('f1736b', $keyword);  
                
        $this->db->like('f1737', $keyword);  
                
        $this->db->like('f1737a', $keyword);  
                
        $this->db->like('f1738', $keyword);  
                
        $this->db->like('f1738ba', $keyword);  
                
        $this->db->like('f1739', $keyword);  
                
        $this->db->like('f1740b', $keyword);  
                
        $this->db->like('f1741', $keyword);  
                
        $this->db->like('f1742b', $keyword);  
                
        $this->db->like('f1743', $keyword);  
                
        $this->db->like('f1744b', $keyword);  
                
        $this->db->like('f1745', $keyword);  
                
        $this->db->like('f1746b', $keyword);  
                
        $this->db->like('f1747', $keyword);  
                
        $this->db->like('f1748b', $keyword);  
                
        $this->db->like('f1749', $keyword);  
                
        $this->db->like('f1750b', $keyword);  
                
        $this->db->like('f1751', $keyword);  
                
        $this->db->like('f1752b', $keyword);  
                
        $this->db->like('f1753', $keyword);  
                
        $this->db->like('f1754b', $keyword);  
                
        $this->db->like('nim', $keyword);  
                
        $this->db->like('namakantor', $keyword);  
                
        $this->db->like('namausaha', $keyword);  
                
        $this->db->like('alamatkerja', $keyword);  
                
        $this->db->like('jabatankerja', $keyword);  
                
        $this->db->like('emailkerja', $keyword);  
                
        $this->db->like('namacp', $keyword);  
                
        $this->db->like('nohpcp', $keyword);  
                
        $this->db->like('username', $keyword);  
        
        $this->db->limit($limit, $offset);
        $result = $this->db->get('jawab_mhs');

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
    * Search All jawab_mhs
    * @param keyword : mixed
    *
    * @return Integer
    *
    */
    public function count_all_search()
    {
        $keyword = $this->session->userdata('keyword');
        $this->db->from('jawab_mhs');        
                
        $this->db->like('kdptimsmh', $keyword);  
                
        $this->db->like('kdpstmsmh', $keyword);  
                
        $this->db->like('nimhsmsmh', $keyword);  
                
        $this->db->like('nmmhsmsmh', $keyword);  
                
        $this->db->like('telpomsmh', $keyword);  
                
        $this->db->like('emailmsmh', $keyword);  
                
        $this->db->like('tahun_lulus', $keyword);  
                
        $this->db->like('f301', $keyword);  
                
        $this->db->like('f302', $keyword);  
                
        $this->db->like('f303', $keyword);  
                
        $this->db->like('f401', $keyword);  
                
        $this->db->like('f402', $keyword);  
                
        $this->db->like('f403', $keyword);  
                
        $this->db->like('f404', $keyword);  
                
        $this->db->like('f405', $keyword);  
                
        $this->db->like('f406', $keyword);  
                
        $this->db->like('f407', $keyword);  
                
        $this->db->like('f408', $keyword);  
                
        $this->db->like('f409', $keyword);  
                
        $this->db->like('f410', $keyword);  
                
        $this->db->like('f411', $keyword);  
                
        $this->db->like('f412', $keyword);  
                
        $this->db->like('f413', $keyword);  
                
        $this->db->like('f414', $keyword);  
                
        $this->db->like('f415', $keyword);  
                
        $this->db->like('f416', $keyword);  
                
        $this->db->like('f6', $keyword);  
                
        $this->db->like('f501', $keyword);  
                
        $this->db->like('f502', $keyword);  
                
        $this->db->like('f503', $keyword);  
                
        $this->db->like('f7', $keyword);  
                
        $this->db->like('f7a', $keyword);  
                
        $this->db->like('f8', $keyword);  
                
        $this->db->like('f901', $keyword);  
                
        $this->db->like('f902', $keyword);  
                
        $this->db->like('f903', $keyword);  
                
        $this->db->like('f904', $keyword);  
                
        $this->db->like('f905', $keyword);  
                
        $this->db->like('f906', $keyword);  
                
        $this->db->like('f1001', $keyword);  
                
        $this->db->like('f1002', $keyword);  
                
        $this->db->like('f1101', $keyword);  
                
        $this->db->like('f1102', $keyword);  
                
        $this->db->like('f1201', $keyword);  
                
        $this->db->like('f1202', $keyword);  
                
        $this->db->like('f1301', $keyword);  
                
        $this->db->like('f1302', $keyword);  
                
        $this->db->like('f1303', $keyword);  
                
        $this->db->like('f14', $keyword);  
                
        $this->db->like('f15', $keyword);  
                
        $this->db->like('f1601', $keyword);  
                
        $this->db->like('f1602', $keyword);  
                
        $this->db->like('f1603', $keyword);  
                
        $this->db->like('f1604', $keyword);  
                
        $this->db->like('f1605', $keyword);  
                
        $this->db->like('f1606', $keyword);  
                
        $this->db->like('f1607', $keyword);  
                
        $this->db->like('f1608', $keyword);  
                
        $this->db->like('f1609', $keyword);  
                
        $this->db->like('f1610', $keyword);  
                
        $this->db->like('f1611', $keyword);  
                
        $this->db->like('f1612', $keyword);  
                
        $this->db->like('f1613', $keyword);  
                
        $this->db->like('f1614', $keyword);  
                
        $this->db->like('f1701', $keyword);  
                
        $this->db->like('f1702b', $keyword);  
                
        $this->db->like('f1703', $keyword);  
                
        $this->db->like('f1704b', $keyword);  
                
        $this->db->like('f1705', $keyword);  
                
        $this->db->like('f1705a', $keyword);  
                
        $this->db->like('f1706', $keyword);  
                
        $this->db->like('f1706ba', $keyword);  
                
        $this->db->like('f1707', $keyword);  
                
        $this->db->like('f1708b', $keyword);  
                
        $this->db->like('f1709', $keyword);  
                
        $this->db->like('f1710b', $keyword);  
                
        $this->db->like('f1711', $keyword);  
                
        $this->db->like('f1711a', $keyword);  
                
        $this->db->like('f1712b', $keyword);  
                
        $this->db->like('f1712a', $keyword);  
                
        $this->db->like('f1713', $keyword);  
                
        $this->db->like('f1714b', $keyword);  
                
        $this->db->like('f1715', $keyword);  
                
        $this->db->like('f1716b', $keyword);  
                
        $this->db->like('f1717', $keyword);  
                
        $this->db->like('f1718b', $keyword);  
                
        $this->db->like('f1719', $keyword);  
                
        $this->db->like('f1720b', $keyword);  
                
        $this->db->like('f1721', $keyword);  
                
        $this->db->like('f1722b', $keyword);  
                
        $this->db->like('f1723', $keyword);  
                
        $this->db->like('f1724b', $keyword);  
                
        $this->db->like('f1725', $keyword);  
                
        $this->db->like('f1726b', $keyword);  
                
        $this->db->like('f1727', $keyword);  
                
        $this->db->like('f1728b', $keyword);  
                
        $this->db->like('f1729', $keyword);  
                
        $this->db->like('f1730b', $keyword);  
                
        $this->db->like('f1731', $keyword);  
                
        $this->db->like('f1732b', $keyword);  
                
        $this->db->like('f1733', $keyword);  
                
        $this->db->like('f1734b', $keyword);  
                
        $this->db->like('f1735', $keyword);  
                
        $this->db->like('f1736b', $keyword);  
                
        $this->db->like('f1737', $keyword);  
                
        $this->db->like('f1737a', $keyword);  
                
        $this->db->like('f1738', $keyword);  
                
        $this->db->like('f1738ba', $keyword);  
                
        $this->db->like('f1739', $keyword);  
                
        $this->db->like('f1740b', $keyword);  
                
        $this->db->like('f1741', $keyword);  
                
        $this->db->like('f1742b', $keyword);  
                
        $this->db->like('f1743', $keyword);  
                
        $this->db->like('f1744b', $keyword);  
                
        $this->db->like('f1745', $keyword);  
                
        $this->db->like('f1746b', $keyword);  
                
        $this->db->like('f1747', $keyword);  
                
        $this->db->like('f1748b', $keyword);  
                
        $this->db->like('f1749', $keyword);  
                
        $this->db->like('f1750b', $keyword);  
                
        $this->db->like('f1751', $keyword);  
                
        $this->db->like('f1752b', $keyword);  
                
        $this->db->like('f1753', $keyword);  
                
        $this->db->like('f1754b', $keyword);  
                
        $this->db->like('nim', $keyword);  
                
        $this->db->like('namakantor', $keyword);  
                
        $this->db->like('namausaha', $keyword);  
                
        $this->db->like('alamatkerja', $keyword);  
                
        $this->db->like('jabatankerja', $keyword);  
                
        $this->db->like('emailkerja', $keyword);  
                
        $this->db->like('namacp', $keyword);  
                
        $this->db->like('nohpcp', $keyword);  
                
        $this->db->like('username', $keyword);  
        
        return $this->db->count_all_results();
    }


    
    
    
    /**
    *  Get One jawab_mhs
    *
    *  @param id : Integer
    *
    *  @return array
    *
    */
    public function get_one($id) 
    {
        $this->db->where('id', $id);
        $result = $this->db->get('jawab_mhs');

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
    *  Default form data jawab_mhs
    *  @return array
    *
    */
    public function add()
    {
        $data = array(
            
                'kdptimsmh' => '',
            
                'kdpstmsmh' => '',
            
                'nimhsmsmh' => '',
            
                'nmmhsmsmh' => '',
            
                'telpomsmh' => '',
            
                'emailmsmh' => '',
            
                'tahun_lulus' => '',
            
                'f21' => '',
            
                'f22' => '',
            
                'f23' => '',
            
                'f24' => '',
            
                'f25' => '',
            
                'f26' => '',
            
                'f27' => '',
            
                'f301' => '',
            
                'f302' => '',
            
                'f303' => '',
            
                'f401' => '',
            
                'f402' => '',
            
                'f403' => '',
            
                'f404' => '',
            
                'f405' => '',
            
                'f406' => '',
            
                'f407' => '',
            
                'f408' => '',
            
                'f409' => '',
            
                'f410' => '',
            
                'f411' => '',
            
                'f412' => '',
            
                'f413' => '',
            
                'f414' => '',
            
                'f415' => '',
            
                'f416' => '',
            
                'f6' => '',
            
                'f501' => '',
            
                'f502' => '',
            
                'f503' => '',
            
                'f7' => '',
            
                'f7a' => '',
            
                'f8' => '',
            
                'f901' => '',
            
                'f902' => '',
            
                'f903' => '',
            
                'f904' => '',
            
                'f905' => '',
            
                'f906' => '',
            
                'f1001' => '',
            
                'f1002' => '',
            
                'f1101' => '',
            
                'f1102' => '',
            
                'f1201' => '',
            
                'f1202' => '',
            
                'f1301' => '',
            
                'f1302' => '',
            
                'f1303' => '',
            
                'f14' => '',
            
                'f15' => '',
            
                'f1601' => '',
            
                'f1602' => '',
            
                'f1603' => '',
            
                'f1604' => '',
            
                'f1605' => '',
            
                'f1606' => '',
            
                'f1607' => '',
            
                'f1608' => '',
            
                'f1609' => '',
            
                'f1610' => '',
            
                'f1611' => '',
            
                'f1612' => '',
            
                'f1613' => '',
            
                'f1614' => '',
            
                'f1701' => '',
            
                'f1702b' => '',
            
                'f1703' => '',
            
                'f1704b' => '',
            
                'f1705' => '',
            
                'f1705a' => '',
            
                'f1706' => '',
            
                'f1706ba' => '',
            
                'f1707' => '',
            
                'f1708b' => '',
            
                'f1709' => '',
            
                'f1710b' => '',
            
                'f1711' => '',
            
                'f1711a' => '',
            
                'f1712b' => '',
            
                'f1712a' => '',
            
                'f1713' => '',
            
                'f1714b' => '',
            
                'f1715' => '',
            
                'f1716b' => '',
            
                'f1717' => '',
            
                'f1718b' => '',
            
                'f1719' => '',
            
                'f1720b' => '',
            
                'f1721' => '',
            
                'f1722b' => '',
            
                'f1723' => '',
            
                'f1724b' => '',
            
                'f1725' => '',
            
                'f1726b' => '',
            
                'f1727' => '',
            
                'f1728b' => '',
            
                'f1729' => '',
            
                'f1730b' => '',
            
                'f1731' => '',
            
                'f1732b' => '',
            
                'f1733' => '',
            
                'f1734b' => '',
            
                'f1735' => '',
            
                'f1736b' => '',
            
                'f1737' => '',
            
                'f1737a' => '',
            
                'f1738' => '',
            
                'f1738ba' => '',
            
                'f1739' => '',
            
                'f1740b' => '',
            
                'f1741' => '',
            
                'f1742b' => '',
            
                'f1743' => '',
            
                'f1744b' => '',
            
                'f1745' => '',
            
                'f1746b' => '',
            
                'f1747' => '',
            
                'f1748b' => '',
            
                'f1749' => '',
            
                'f1750b' => '',
            
                'f1751' => '',
            
                'f1752b' => '',
            
                'f1753' => '',
            
                'f1754b' => '',
            
                'nim' => '',
            
                'namakantor' => '',
            
                'namausaha' => '',
            
                'alamatkerja' => '',
            
                'jabatankerja' => '',
            
                'emailkerja' => '',
            
                'namacp' => '',
            
                'nohpcp' => '',
            
                'username' => '',
            
                'date_updated' => '',
            
                'datetime' => '',
            
        );

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
        
            'kdptimsmh' => strip_tags($this->input->post('kdptimsmh', TRUE)),
        
            'kdpstmsmh' => strip_tags($this->input->post('kdpstmsmh', TRUE)),
        
            'nimhsmsmh' => strip_tags($this->input->post('nimhsmsmh', TRUE)),
        
            'nmmhsmsmh' => strip_tags($this->input->post('nmmhsmsmh', TRUE)),
        
            'telpomsmh' => strip_tags($this->input->post('telpomsmh', TRUE)),
        
            'emailmsmh' => strip_tags($this->input->post('emailmsmh', TRUE)),
        
            'tahun_lulus' => strip_tags($this->input->post('tahun_lulus', TRUE)),
        
            'f21' => strip_tags($this->input->post('f21', TRUE)),
        
            'f22' => strip_tags($this->input->post('f22', TRUE)),
        
            'f23' => strip_tags($this->input->post('f23', TRUE)),
        
            'f24' => strip_tags($this->input->post('f24', TRUE)),
        
            'f25' => strip_tags($this->input->post('f25', TRUE)),
        
            'f26' => strip_tags($this->input->post('f26', TRUE)),
        
            'f27' => strip_tags($this->input->post('f27', TRUE)),
        
            'f301' => strip_tags($this->input->post('f301', TRUE)),
        
            'f302' => strip_tags($this->input->post('f302', TRUE)),
        
            'f303' => strip_tags($this->input->post('f303', TRUE)),
        
            'f401' => strip_tags($this->input->post('f401', TRUE)),
        
            'f402' => strip_tags($this->input->post('f402', TRUE)),
        
            'f403' => strip_tags($this->input->post('f403', TRUE)),
        
            'f404' => strip_tags($this->input->post('f404', TRUE)),
        
            'f405' => strip_tags($this->input->post('f405', TRUE)),
        
            'f406' => strip_tags($this->input->post('f406', TRUE)),
        
            'f407' => strip_tags($this->input->post('f407', TRUE)),
        
            'f408' => strip_tags($this->input->post('f408', TRUE)),
        
            'f409' => strip_tags($this->input->post('f409', TRUE)),
        
            'f410' => strip_tags($this->input->post('f410', TRUE)),
        
            'f411' => strip_tags($this->input->post('f411', TRUE)),
        
            'f412' => strip_tags($this->input->post('f412', TRUE)),
        
            'f413' => strip_tags($this->input->post('f413', TRUE)),
        
            'f414' => strip_tags($this->input->post('f414', TRUE)),
        
            'f415' => strip_tags($this->input->post('f415', TRUE)),
        
            'f416' => strip_tags($this->input->post('f416', TRUE)),
        
            'f6' => strip_tags($this->input->post('f6', TRUE)),
        
            'f501' => strip_tags($this->input->post('f501', TRUE)),
        
            'f502' => strip_tags($this->input->post('f502', TRUE)),
        
            'f503' => strip_tags($this->input->post('f503', TRUE)),
        
            'f7' => strip_tags($this->input->post('f7', TRUE)),
        
            'f7a' => strip_tags($this->input->post('f7a', TRUE)),
        
            'f8' => strip_tags($this->input->post('f8', TRUE)),
        
            'f901' => strip_tags($this->input->post('f901', TRUE)),
        
            'f902' => strip_tags($this->input->post('f902', TRUE)),
        
            'f903' => strip_tags($this->input->post('f903', TRUE)),
        
            'f904' => strip_tags($this->input->post('f904', TRUE)),
        
            'f905' => strip_tags($this->input->post('f905', TRUE)),
        
            'f906' => strip_tags($this->input->post('f906', TRUE)),
        
            'f1001' => strip_tags($this->input->post('f1001', TRUE)),
        
            'f1002' => strip_tags($this->input->post('f1002', TRUE)),
        
            'f1101' => strip_tags($this->input->post('f1101', TRUE)),
        
            'f1102' => strip_tags($this->input->post('f1102', TRUE)),
        
            'f1201' => strip_tags($this->input->post('f1201', TRUE)),
        
            'f1202' => strip_tags($this->input->post('f1202', TRUE)),
        
            'f1301' => strip_tags($this->input->post('f1301', TRUE)),
        
            'f1302' => strip_tags($this->input->post('f1302', TRUE)),
        
            'f1303' => strip_tags($this->input->post('f1303', TRUE)),
        
            'f14' => strip_tags($this->input->post('f14', TRUE)),
        
            'f15' => strip_tags($this->input->post('f15', TRUE)),
        
            'f1601' => strip_tags($this->input->post('f1601', TRUE)),
        
            'f1602' => strip_tags($this->input->post('f1602', TRUE)),
        
            'f1603' => strip_tags($this->input->post('f1603', TRUE)),
        
            'f1604' => strip_tags($this->input->post('f1604', TRUE)),
        
            'f1605' => strip_tags($this->input->post('f1605', TRUE)),
        
            'f1606' => strip_tags($this->input->post('f1606', TRUE)),
        
            'f1607' => strip_tags($this->input->post('f1607', TRUE)),
        
            'f1608' => strip_tags($this->input->post('f1608', TRUE)),
        
            'f1609' => strip_tags($this->input->post('f1609', TRUE)),
        
            'f1610' => strip_tags($this->input->post('f1610', TRUE)),
        
            'f1611' => strip_tags($this->input->post('f1611', TRUE)),
        
            'f1612' => strip_tags($this->input->post('f1612', TRUE)),
        
            'f1613' => strip_tags($this->input->post('f1613', TRUE)),
        
            'f1614' => strip_tags($this->input->post('f1614', TRUE)),
        
            'f1701' => strip_tags($this->input->post('f1701', TRUE)),
        
            'f1702b' => strip_tags($this->input->post('f1702b', TRUE)),
        
            'f1703' => strip_tags($this->input->post('f1703', TRUE)),
        
            'f1704b' => strip_tags($this->input->post('f1704b', TRUE)),
        
            'f1705' => strip_tags($this->input->post('f1705', TRUE)),
        
            'f1705a' => strip_tags($this->input->post('f1705a', TRUE)),
        
            'f1706' => strip_tags($this->input->post('f1706', TRUE)),
        
            'f1706ba' => strip_tags($this->input->post('f1706ba', TRUE)),
        
            'f1707' => strip_tags($this->input->post('f1707', TRUE)),
        
            'f1708b' => strip_tags($this->input->post('f1708b', TRUE)),
        
            'f1709' => strip_tags($this->input->post('f1709', TRUE)),
        
            'f1710b' => strip_tags($this->input->post('f1710b', TRUE)),
        
            'f1711' => strip_tags($this->input->post('f1711', TRUE)),
        
            'f1711a' => strip_tags($this->input->post('f1711a', TRUE)),
        
            'f1712b' => strip_tags($this->input->post('f1712b', TRUE)),
        
            'f1712a' => strip_tags($this->input->post('f1712a', TRUE)),
        
            'f1713' => strip_tags($this->input->post('f1713', TRUE)),
        
            'f1714b' => strip_tags($this->input->post('f1714b', TRUE)),
        
            'f1715' => strip_tags($this->input->post('f1715', TRUE)),
        
            'f1716b' => strip_tags($this->input->post('f1716b', TRUE)),
        
            'f1717' => strip_tags($this->input->post('f1717', TRUE)),
        
            'f1718b' => strip_tags($this->input->post('f1718b', TRUE)),
        
            'f1719' => strip_tags($this->input->post('f1719', TRUE)),
        
            'f1720b' => strip_tags($this->input->post('f1720b', TRUE)),
        
            'f1721' => strip_tags($this->input->post('f1721', TRUE)),
        
            'f1722b' => strip_tags($this->input->post('f1722b', TRUE)),
        
            'f1723' => strip_tags($this->input->post('f1723', TRUE)),
        
            'f1724b' => strip_tags($this->input->post('f1724b', TRUE)),
        
            'f1725' => strip_tags($this->input->post('f1725', TRUE)),
        
            'f1726b' => strip_tags($this->input->post('f1726b', TRUE)),
        
            'f1727' => strip_tags($this->input->post('f1727', TRUE)),
        
            'f1728b' => strip_tags($this->input->post('f1728b', TRUE)),
        
            'f1729' => strip_tags($this->input->post('f1729', TRUE)),
        
            'f1730b' => strip_tags($this->input->post('f1730b', TRUE)),
        
            'f1731' => strip_tags($this->input->post('f1731', TRUE)),
        
            'f1732b' => strip_tags($this->input->post('f1732b', TRUE)),
        
            'f1733' => strip_tags($this->input->post('f1733', TRUE)),
        
            'f1734b' => strip_tags($this->input->post('f1734b', TRUE)),
        
            'f1735' => strip_tags($this->input->post('f1735', TRUE)),
        
            'f1736b' => strip_tags($this->input->post('f1736b', TRUE)),
        
            'f1737' => strip_tags($this->input->post('f1737', TRUE)),
        
            'f1737a' => strip_tags($this->input->post('f1737a', TRUE)),
        
            'f1738' => strip_tags($this->input->post('f1738', TRUE)),
        
            'f1738ba' => strip_tags($this->input->post('f1738ba', TRUE)),
        
            'f1739' => strip_tags($this->input->post('f1739', TRUE)),
        
            'f1740b' => strip_tags($this->input->post('f1740b', TRUE)),
        
            'f1741' => strip_tags($this->input->post('f1741', TRUE)),
        
            'f1742b' => strip_tags($this->input->post('f1742b', TRUE)),
        
            'f1743' => strip_tags($this->input->post('f1743', TRUE)),
        
            'f1744b' => strip_tags($this->input->post('f1744b', TRUE)),
        
            'f1745' => strip_tags($this->input->post('f1745', TRUE)),
        
            'f1746b' => strip_tags($this->input->post('f1746b', TRUE)),
        
            'f1747' => strip_tags($this->input->post('f1747', TRUE)),
        
            'f1748b' => strip_tags($this->input->post('f1748b', TRUE)),
        
            'f1749' => strip_tags($this->input->post('f1749', TRUE)),
        
            'f1750b' => strip_tags($this->input->post('f1750b', TRUE)),
        
            'f1751' => strip_tags($this->input->post('f1751', TRUE)),
        
            'f1752b' => strip_tags($this->input->post('f1752b', TRUE)),
        
            'f1753' => strip_tags($this->input->post('f1753', TRUE)),
        
            'f1754b' => strip_tags($this->input->post('f1754b', TRUE)),
        
            'nim' => strip_tags($this->input->post('nim', TRUE)),
        
            'namakantor' => strip_tags($this->input->post('namakantor', TRUE)),
        
            'namausaha' => strip_tags($this->input->post('namausaha', TRUE)),
        
            'alamatkerja' => strip_tags($this->input->post('alamatkerja', TRUE)),
        
            'jabatankerja' => strip_tags($this->input->post('jabatankerja', TRUE)),
        
            'emailkerja' => strip_tags($this->input->post('emailkerja', TRUE)),
        
            'namacp' => strip_tags($this->input->post('namacp', TRUE)),
        
            'nohpcp' => strip_tags($this->input->post('nohpcp', TRUE)),
        
            'username' => strip_tags($this->input->post('username', TRUE)),
        
            'date_updated' => strip_tags($this->input->post('date_updated', TRUE)),
        
            'datetime' => strip_tags($this->input->post('datetime', TRUE)),
        
        );
        
        
        $this->db->insert('jawab_mhs', $data);
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
        
                'kdptimsmh' => strip_tags($this->input->post('kdptimsmh', TRUE)),
        
                'kdpstmsmh' => strip_tags($this->input->post('kdpstmsmh', TRUE)),
        
                'nimhsmsmh' => strip_tags($this->input->post('nimhsmsmh', TRUE)),
        
                'nmmhsmsmh' => strip_tags($this->input->post('nmmhsmsmh', TRUE)),
        
                'telpomsmh' => strip_tags($this->input->post('telpomsmh', TRUE)),
        
                'emailmsmh' => strip_tags($this->input->post('emailmsmh', TRUE)),
        
                'tahun_lulus' => strip_tags($this->input->post('tahun_lulus', TRUE)),
        
                'f21' => strip_tags($this->input->post('f21', TRUE)),
        
                'f22' => strip_tags($this->input->post('f22', TRUE)),
        
                'f23' => strip_tags($this->input->post('f23', TRUE)),
        
                'f24' => strip_tags($this->input->post('f24', TRUE)),
        
                'f25' => strip_tags($this->input->post('f25', TRUE)),
        
                'f26' => strip_tags($this->input->post('f26', TRUE)),
        
                'f27' => strip_tags($this->input->post('f27', TRUE)),
        
                'f301' => strip_tags($this->input->post('f301', TRUE)),
        
                'f302' => strip_tags($this->input->post('f302', TRUE)),
        
                'f303' => strip_tags($this->input->post('f303', TRUE)),
        
                'f401' => strip_tags($this->input->post('f401', TRUE)),
        
                'f402' => strip_tags($this->input->post('f402', TRUE)),
        
                'f403' => strip_tags($this->input->post('f403', TRUE)),
        
                'f404' => strip_tags($this->input->post('f404', TRUE)),
        
                'f405' => strip_tags($this->input->post('f405', TRUE)),
        
                'f406' => strip_tags($this->input->post('f406', TRUE)),
        
                'f407' => strip_tags($this->input->post('f407', TRUE)),
        
                'f408' => strip_tags($this->input->post('f408', TRUE)),
        
                'f409' => strip_tags($this->input->post('f409', TRUE)),
        
                'f410' => strip_tags($this->input->post('f410', TRUE)),
        
                'f411' => strip_tags($this->input->post('f411', TRUE)),
        
                'f412' => strip_tags($this->input->post('f412', TRUE)),
        
                'f413' => strip_tags($this->input->post('f413', TRUE)),
        
                'f414' => strip_tags($this->input->post('f414', TRUE)),
        
                'f415' => strip_tags($this->input->post('f415', TRUE)),
        
                'f416' => strip_tags($this->input->post('f416', TRUE)),
        
                'f6' => strip_tags($this->input->post('f6', TRUE)),
        
                'f501' => strip_tags($this->input->post('f501', TRUE)),
        
                'f502' => strip_tags($this->input->post('f502', TRUE)),
        
                'f503' => strip_tags($this->input->post('f503', TRUE)),
        
                'f7' => strip_tags($this->input->post('f7', TRUE)),
        
                'f7a' => strip_tags($this->input->post('f7a', TRUE)),
        
                'f8' => strip_tags($this->input->post('f8', TRUE)),
        
                'f901' => strip_tags($this->input->post('f901', TRUE)),
        
                'f902' => strip_tags($this->input->post('f902', TRUE)),
        
                'f903' => strip_tags($this->input->post('f903', TRUE)),
        
                'f904' => strip_tags($this->input->post('f904', TRUE)),
        
                'f905' => strip_tags($this->input->post('f905', TRUE)),
        
                'f906' => strip_tags($this->input->post('f906', TRUE)),
        
                'f1001' => strip_tags($this->input->post('f1001', TRUE)),
        
                'f1002' => strip_tags($this->input->post('f1002', TRUE)),
        
                'f1101' => strip_tags($this->input->post('f1101', TRUE)),
        
                'f1102' => strip_tags($this->input->post('f1102', TRUE)),
        
                'f1201' => strip_tags($this->input->post('f1201', TRUE)),
        
                'f1202' => strip_tags($this->input->post('f1202', TRUE)),
        
                'f1301' => strip_tags($this->input->post('f1301', TRUE)),
        
                'f1302' => strip_tags($this->input->post('f1302', TRUE)),
        
                'f1303' => strip_tags($this->input->post('f1303', TRUE)),
        
                'f14' => strip_tags($this->input->post('f14', TRUE)),
        
                'f15' => strip_tags($this->input->post('f15', TRUE)),
        
                'f1601' => strip_tags($this->input->post('f1601', TRUE)),
        
                'f1602' => strip_tags($this->input->post('f1602', TRUE)),
        
                'f1603' => strip_tags($this->input->post('f1603', TRUE)),
        
                'f1604' => strip_tags($this->input->post('f1604', TRUE)),
        
                'f1605' => strip_tags($this->input->post('f1605', TRUE)),
        
                'f1606' => strip_tags($this->input->post('f1606', TRUE)),
        
                'f1607' => strip_tags($this->input->post('f1607', TRUE)),
        
                'f1608' => strip_tags($this->input->post('f1608', TRUE)),
        
                'f1609' => strip_tags($this->input->post('f1609', TRUE)),
        
                'f1610' => strip_tags($this->input->post('f1610', TRUE)),
        
                'f1611' => strip_tags($this->input->post('f1611', TRUE)),
        
                'f1612' => strip_tags($this->input->post('f1612', TRUE)),
        
                'f1613' => strip_tags($this->input->post('f1613', TRUE)),
        
                'f1614' => strip_tags($this->input->post('f1614', TRUE)),
        
                'f1701' => strip_tags($this->input->post('f1701', TRUE)),
        
                'f1702b' => strip_tags($this->input->post('f1702b', TRUE)),
        
                'f1703' => strip_tags($this->input->post('f1703', TRUE)),
        
                'f1704b' => strip_tags($this->input->post('f1704b', TRUE)),
        
                'f1705' => strip_tags($this->input->post('f1705', TRUE)),
        
                'f1705a' => strip_tags($this->input->post('f1705a', TRUE)),
        
                'f1706' => strip_tags($this->input->post('f1706', TRUE)),
        
                'f1706ba' => strip_tags($this->input->post('f1706ba', TRUE)),
        
                'f1707' => strip_tags($this->input->post('f1707', TRUE)),
        
                'f1708b' => strip_tags($this->input->post('f1708b', TRUE)),
        
                'f1709' => strip_tags($this->input->post('f1709', TRUE)),
        
                'f1710b' => strip_tags($this->input->post('f1710b', TRUE)),
        
                'f1711' => strip_tags($this->input->post('f1711', TRUE)),
        
                'f1711a' => strip_tags($this->input->post('f1711a', TRUE)),
        
                'f1712b' => strip_tags($this->input->post('f1712b', TRUE)),
        
                'f1712a' => strip_tags($this->input->post('f1712a', TRUE)),
        
                'f1713' => strip_tags($this->input->post('f1713', TRUE)),
        
                'f1714b' => strip_tags($this->input->post('f1714b', TRUE)),
        
                'f1715' => strip_tags($this->input->post('f1715', TRUE)),
        
                'f1716b' => strip_tags($this->input->post('f1716b', TRUE)),
        
                'f1717' => strip_tags($this->input->post('f1717', TRUE)),
        
                'f1718b' => strip_tags($this->input->post('f1718b', TRUE)),
        
                'f1719' => strip_tags($this->input->post('f1719', TRUE)),
        
                'f1720b' => strip_tags($this->input->post('f1720b', TRUE)),
        
                'f1721' => strip_tags($this->input->post('f1721', TRUE)),
        
                'f1722b' => strip_tags($this->input->post('f1722b', TRUE)),
        
                'f1723' => strip_tags($this->input->post('f1723', TRUE)),
        
                'f1724b' => strip_tags($this->input->post('f1724b', TRUE)),
        
                'f1725' => strip_tags($this->input->post('f1725', TRUE)),
        
                'f1726b' => strip_tags($this->input->post('f1726b', TRUE)),
        
                'f1727' => strip_tags($this->input->post('f1727', TRUE)),
        
                'f1728b' => strip_tags($this->input->post('f1728b', TRUE)),
        
                'f1729' => strip_tags($this->input->post('f1729', TRUE)),
        
                'f1730b' => strip_tags($this->input->post('f1730b', TRUE)),
        
                'f1731' => strip_tags($this->input->post('f1731', TRUE)),
        
                'f1732b' => strip_tags($this->input->post('f1732b', TRUE)),
        
                'f1733' => strip_tags($this->input->post('f1733', TRUE)),
        
                'f1734b' => strip_tags($this->input->post('f1734b', TRUE)),
        
                'f1735' => strip_tags($this->input->post('f1735', TRUE)),
        
                'f1736b' => strip_tags($this->input->post('f1736b', TRUE)),
        
                'f1737' => strip_tags($this->input->post('f1737', TRUE)),
        
                'f1737a' => strip_tags($this->input->post('f1737a', TRUE)),
        
                'f1738' => strip_tags($this->input->post('f1738', TRUE)),
        
                'f1738ba' => strip_tags($this->input->post('f1738ba', TRUE)),
        
                'f1739' => strip_tags($this->input->post('f1739', TRUE)),
        
                'f1740b' => strip_tags($this->input->post('f1740b', TRUE)),
        
                'f1741' => strip_tags($this->input->post('f1741', TRUE)),
        
                'f1742b' => strip_tags($this->input->post('f1742b', TRUE)),
        
                'f1743' => strip_tags($this->input->post('f1743', TRUE)),
        
                'f1744b' => strip_tags($this->input->post('f1744b', TRUE)),
        
                'f1745' => strip_tags($this->input->post('f1745', TRUE)),
        
                'f1746b' => strip_tags($this->input->post('f1746b', TRUE)),
        
                'f1747' => strip_tags($this->input->post('f1747', TRUE)),
        
                'f1748b' => strip_tags($this->input->post('f1748b', TRUE)),
        
                'f1749' => strip_tags($this->input->post('f1749', TRUE)),
        
                'f1750b' => strip_tags($this->input->post('f1750b', TRUE)),
        
                'f1751' => strip_tags($this->input->post('f1751', TRUE)),
        
                'f1752b' => strip_tags($this->input->post('f1752b', TRUE)),
        
                'f1753' => strip_tags($this->input->post('f1753', TRUE)),
        
                'f1754b' => strip_tags($this->input->post('f1754b', TRUE)),
        
                'nim' => strip_tags($this->input->post('nim', TRUE)),
        
                'namakantor' => strip_tags($this->input->post('namakantor', TRUE)),
        
                'namausaha' => strip_tags($this->input->post('namausaha', TRUE)),
        
                'alamatkerja' => strip_tags($this->input->post('alamatkerja', TRUE)),
        
                'jabatankerja' => strip_tags($this->input->post('jabatankerja', TRUE)),
        
                'emailkerja' => strip_tags($this->input->post('emailkerja', TRUE)),
        
                'namacp' => strip_tags($this->input->post('namacp', TRUE)),
        
                'nohpcp' => strip_tags($this->input->post('nohpcp', TRUE)),
        
                'username' => strip_tags($this->input->post('username', TRUE)),
        
                'date_updated' => strip_tags($this->input->post('date_updated', TRUE)),
        
                'datetime' => strip_tags($this->input->post('datetime', TRUE)),
        
        );
        
        
        $this->db->where('id', $id);
        $this->db->update('jawab_mhs', $data);
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
        $this->db->delete('jawab_mhs');
        
    }







    



}
