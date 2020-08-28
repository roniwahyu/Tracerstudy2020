<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class jawab_mhss_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all($limit, $uri) {

        $result = $this->db->get('jawab_mhs', $limit, $uri);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }
    
    function get_one($id) {
        $this->db->where('id', $id);
        $result = $this->db->get('jawab_mhs');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function save() {
           $data = array(
        
            'nim' => $this->input->post('nim', TRUE),
           
            'f301' => $this->input->post('f301', TRUE),
           
            'f302' => $this->input->post('f302', TRUE),
           
            'f303' => $this->input->post('f303', TRUE),
           
            'f401' => $this->input->post('f401', TRUE),
           
            'f402' => $this->input->post('f402', TRUE),
           
            'f403' => $this->input->post('f403', TRUE),
           
            'f404' => $this->input->post('f404', TRUE),
           
            'f405' => $this->input->post('f405', TRUE),
           
            'f406' => $this->input->post('f406', TRUE),
           
            'f407' => $this->input->post('f407', TRUE),
           
            'f408' => $this->input->post('f408', TRUE),
           
            'f409' => $this->input->post('f409', TRUE),
           
            'f410' => $this->input->post('f410', TRUE),
           
            'f411' => $this->input->post('f411', TRUE),
           
            'f412' => $this->input->post('f412', TRUE),
           
            'f413' => $this->input->post('f413', TRUE),
           
            'f414' => $this->input->post('f414', TRUE),
           
            'f415' => $this->input->post('f415', TRUE),
           
            'f416' => $this->input->post('f416', TRUE),
           
            'f6' => $this->input->post('f6', TRUE),
           
            'f501' => $this->input->post('f501', TRUE),
           
            'f502' => $this->input->post('f502', TRUE),
           
            'f503' => $this->input->post('f503', TRUE),
           
            'f7' => $this->input->post('f7', TRUE),
           
            'f7a' => $this->input->post('f7a', TRUE),
           
            'f8' => $this->input->post('f8', TRUE),
           
            'f901' => $this->input->post('f901', TRUE),
           
            'f902' => $this->input->post('f902', TRUE),
           
            'f903' => $this->input->post('f903', TRUE),
           
            'f904' => $this->input->post('f904', TRUE),
           
            'f905' => $this->input->post('f905', TRUE),
           
            'f906' => $this->input->post('f906', TRUE),
           
            'f1001' => $this->input->post('f1001', TRUE),
           
            'f1002' => $this->input->post('f1002', TRUE),
           
            'f1101' => $this->input->post('f1101', TRUE),
           
            'f1102' => $this->input->post('f1102', TRUE),
           
            'f12' => $this->input->post('f12', TRUE),
           
            'f1301' => $this->input->post('f1301', TRUE),
           
            'f1302' => $this->input->post('f1302', TRUE),
           
            'f1303' => $this->input->post('f1303', TRUE),
           
            'f14' => $this->input->post('f14', TRUE),
           
            'f15' => $this->input->post('f15', TRUE),
           
            'f1601' => $this->input->post('f1601', TRUE),
           
            'f1602' => $this->input->post('f1602', TRUE),
           
            'f1603' => $this->input->post('f1603', TRUE),
           
            'f1604' => $this->input->post('f1604', TRUE),
           
            'f1605' => $this->input->post('f1605', TRUE),
           
            'f1606' => $this->input->post('f1606', TRUE),
           
            'f1607' => $this->input->post('f1607', TRUE),
           
            'f1608' => $this->input->post('f1608', TRUE),
           
            'f1609' => $this->input->post('f1609', TRUE),
           
            'f1610' => $this->input->post('f1610', TRUE),
           
            'f1611' => $this->input->post('f1611', TRUE),
           
            'f1612' => $this->input->post('f1612', TRUE),
           
            'f1613' => $this->input->post('f1613', TRUE),
           
            'f1614' => $this->input->post('f1614', TRUE),
           
            'f1701' => $this->input->post('f1701', TRUE),
           
            'f1702' => $this->input->post('f1702', TRUE),
           
            'f1703' => $this->input->post('f1703', TRUE),
           
            'f1704' => $this->input->post('f1704', TRUE),
           
            'f1705' => $this->input->post('f1705', TRUE),
           
            'f1705a' => $this->input->post('f1705a', TRUE),
           
            'f1706' => $this->input->post('f1706', TRUE),
           
            'f1706a' => $this->input->post('f1706a', TRUE),
           
            'f1707' => $this->input->post('f1707', TRUE),
           
            'f1708' => $this->input->post('f1708', TRUE),
           
            'f1709' => $this->input->post('f1709', TRUE),
           
            'f1710' => $this->input->post('f1710', TRUE),
           
            'f1711' => $this->input->post('f1711', TRUE),
           
            'f1711a' => $this->input->post('f1711a', TRUE),
           
            'f1712' => $this->input->post('f1712', TRUE),
           
            'f1712a' => $this->input->post('f1712a', TRUE),
           
            'f1713' => $this->input->post('f1713', TRUE),
           
            'f1714' => $this->input->post('f1714', TRUE),
           
            'f1715' => $this->input->post('f1715', TRUE),
           
            'f1716' => $this->input->post('f1716', TRUE),
           
            'f1717' => $this->input->post('f1717', TRUE),
           
            'f1718' => $this->input->post('f1718', TRUE),
           
            'f1719' => $this->input->post('f1719', TRUE),
           
            'f1720' => $this->input->post('f1720', TRUE),
           
            'f1721' => $this->input->post('f1721', TRUE),
           
            'f1722' => $this->input->post('f1722', TRUE),
           
            'f1723' => $this->input->post('f1723', TRUE),
           
            'f1724' => $this->input->post('f1724', TRUE),
           
            'f1725' => $this->input->post('f1725', TRUE),
           
            'f1726' => $this->input->post('f1726', TRUE),
           
            'f1727' => $this->input->post('f1727', TRUE),
           
            'f1728' => $this->input->post('f1728', TRUE),
           
            'f1729' => $this->input->post('f1729', TRUE),
           
            'f1730' => $this->input->post('f1730', TRUE),
           
            'f1731' => $this->input->post('f1731', TRUE),
           
            'f1732' => $this->input->post('f1732', TRUE),
           
            'f1733' => $this->input->post('f1733', TRUE),
           
            'f1734' => $this->input->post('f1734', TRUE),
           
            'f1735' => $this->input->post('f1735', TRUE),
           
            'f1736' => $this->input->post('f1736', TRUE),
           
            'f1737' => $this->input->post('f1737', TRUE),
           
            'f1737a' => $this->input->post('f1737a', TRUE),
           
            'f1738' => $this->input->post('f1738', TRUE),
           
            'f1738a' => $this->input->post('f1738a', TRUE),
           
            'f1739' => $this->input->post('f1739', TRUE),
           
            'f1740' => $this->input->post('f1740', TRUE),
           
            'f1741' => $this->input->post('f1741', TRUE),
           
            'f1742' => $this->input->post('f1742', TRUE),
           
            'f1743' => $this->input->post('f1743', TRUE),
           
            'f1744' => $this->input->post('f1744', TRUE),
           
            'f1745' => $this->input->post('f1745', TRUE),
           
            'f1746' => $this->input->post('f1746', TRUE),
           
            'f1747' => $this->input->post('f1747', TRUE),
           
            'f1748' => $this->input->post('f1748', TRUE),
           
            'f1749' => $this->input->post('f1749', TRUE),
           
            'f1750' => $this->input->post('f1750', TRUE),
           
            'f1751' => $this->input->post('f1751', TRUE),
           
            'f1752' => $this->input->post('f1752', TRUE),
           
            'f1753' => $this->input->post('f1753', TRUE),
           
            'f1754' => $this->input->post('f1754', TRUE),
            'userid' => $this->input->post('userid', TRUE),
            // 'userid'=>userid(),
            // 'datetime' => date("Y-m-d H:m:s")
            'datetime' => NOW(),
           
        );
        $this->db->insert('jawab_mhs', $data);
        // echo $this->db->affected_row();
    }

    function update($id) {
        $data = array(
        'id' => $this->input->post('id',TRUE),
       'nim' => $this->input->post('nim', TRUE),
       
       'f301' => $this->input->post('f301', TRUE),
       
       'f302' => $this->input->post('f302', TRUE),
       
       'f303' => $this->input->post('f303', TRUE),
       
       'f401' => $this->input->post('f401', TRUE),
       
       'f402' => $this->input->post('f402', TRUE),
       
       'f403' => $this->input->post('f403', TRUE),
       
       'f404' => $this->input->post('f404', TRUE),
       
       'f405' => $this->input->post('f405', TRUE),
       
       'f406' => $this->input->post('f406', TRUE),
       
       'f407' => $this->input->post('f407', TRUE),
       
       'f408' => $this->input->post('f408', TRUE),
       
       'f409' => $this->input->post('f409', TRUE),
       
       'f410' => $this->input->post('f410', TRUE),
       
       'f411' => $this->input->post('f411', TRUE),
       
       'f412' => $this->input->post('f412', TRUE),
       
       'f413' => $this->input->post('f413', TRUE),
       
       'f414' => $this->input->post('f414', TRUE),
       
       'f415' => $this->input->post('f415', TRUE),
       
       'f416' => $this->input->post('f416', TRUE),
       
       'f6' => $this->input->post('f6', TRUE),
       
       'f501' => $this->input->post('f501', TRUE),
       
       'f502' => $this->input->post('f502', TRUE),
       
       'f503' => $this->input->post('f503', TRUE),
       
       'f7' => $this->input->post('f7', TRUE),
       
       'f7a' => $this->input->post('f7a', TRUE),
       
       'f8' => $this->input->post('f8', TRUE),
       
       'f901' => $this->input->post('f901', TRUE),
       
       'f902' => $this->input->post('f902', TRUE),
       
       'f903' => $this->input->post('f903', TRUE),
       
       'f904' => $this->input->post('f904', TRUE),
       
       'f905' => $this->input->post('f905', TRUE),
       
       'f906' => $this->input->post('f906', TRUE),
       
       'f1001' => $this->input->post('f1001', TRUE),
       
       'f1002' => $this->input->post('f1002', TRUE),
       
       'f1101' => $this->input->post('f1101', TRUE),
       
       'f1102' => $this->input->post('f1102', TRUE),
       
       'f12' => $this->input->post('f12', TRUE),
       
       'f1301' => $this->input->post('f1301', TRUE),
       
       'f1302' => $this->input->post('f1302', TRUE),
       
       'f1303' => $this->input->post('f1303', TRUE),
       
       'f14' => $this->input->post('f14', TRUE),
       
       'f15' => $this->input->post('f15', TRUE),
       
       'f1601' => $this->input->post('f1601', TRUE),
       
       'f1602' => $this->input->post('f1602', TRUE),
       
       'f1603' => $this->input->post('f1603', TRUE),
       
       'f1604' => $this->input->post('f1604', TRUE),
       
       'f1605' => $this->input->post('f1605', TRUE),
       
       'f1606' => $this->input->post('f1606', TRUE),
       
       'f1607' => $this->input->post('f1607', TRUE),
       
       'f1608' => $this->input->post('f1608', TRUE),
       
       'f1609' => $this->input->post('f1609', TRUE),
       
       'f1610' => $this->input->post('f1610', TRUE),
       
       'f1611' => $this->input->post('f1611', TRUE),
       
       'f1612' => $this->input->post('f1612', TRUE),
       
       'f1613' => $this->input->post('f1613', TRUE),
       
       'f1614' => $this->input->post('f1614', TRUE),
       
       'f1701' => $this->input->post('f1701', TRUE),
       
       'f1702' => $this->input->post('f1702', TRUE),
       
       'f1703' => $this->input->post('f1703', TRUE),
       
       'f1704' => $this->input->post('f1704', TRUE),
       
       'f1705' => $this->input->post('f1705', TRUE),
       
       'f1705a' => $this->input->post('f1705a', TRUE),
       
       'f1706' => $this->input->post('f1706', TRUE),
       
       'f1706a' => $this->input->post('f1706a', TRUE),
       
       'f1707' => $this->input->post('f1707', TRUE),
       
       'f1708' => $this->input->post('f1708', TRUE),
       
       'f1709' => $this->input->post('f1709', TRUE),
       
       'f1710' => $this->input->post('f1710', TRUE),
       
       'f1711' => $this->input->post('f1711', TRUE),
       
       'f1711a' => $this->input->post('f1711a', TRUE),
       
       'f1712' => $this->input->post('f1712', TRUE),
       
       'f1712a' => $this->input->post('f1712a', TRUE),
       
       'f1713' => $this->input->post('f1713', TRUE),
       
       'f1714' => $this->input->post('f1714', TRUE),
       
       'f1715' => $this->input->post('f1715', TRUE),
       
       'f1716' => $this->input->post('f1716', TRUE),
       
       'f1717' => $this->input->post('f1717', TRUE),
       
       'f1718' => $this->input->post('f1718', TRUE),
       
       'f1719' => $this->input->post('f1719', TRUE),
       
       'f1720' => $this->input->post('f1720', TRUE),
       
       'f1721' => $this->input->post('f1721', TRUE),
       
       'f1722' => $this->input->post('f1722', TRUE),
       
       'f1723' => $this->input->post('f1723', TRUE),
       
       'f1724' => $this->input->post('f1724', TRUE),
       
       'f1725' => $this->input->post('f1725', TRUE),
       
       'f1726' => $this->input->post('f1726', TRUE),
       
       'f1727' => $this->input->post('f1727', TRUE),
       
       'f1728' => $this->input->post('f1728', TRUE),
       
       'f1729' => $this->input->post('f1729', TRUE),
       
       'f1730' => $this->input->post('f1730', TRUE),
       
       'f1731' => $this->input->post('f1731', TRUE),
       
       'f1732' => $this->input->post('f1732', TRUE),
       
       'f1733' => $this->input->post('f1733', TRUE),
       
       'f1734' => $this->input->post('f1734', TRUE),
       
       'f1735' => $this->input->post('f1735', TRUE),
       
       'f1736' => $this->input->post('f1736', TRUE),
       
       'f1737' => $this->input->post('f1737', TRUE),
       
       'f1737a' => $this->input->post('f1737a', TRUE),
       
       'f1738' => $this->input->post('f1738', TRUE),
       
       'f1738a' => $this->input->post('f1738a', TRUE),
       
       'f1739' => $this->input->post('f1739', TRUE),
       
       'f1740' => $this->input->post('f1740', TRUE),
       
       'f1741' => $this->input->post('f1741', TRUE),
       
       'f1742' => $this->input->post('f1742', TRUE),
       
       'f1743' => $this->input->post('f1743', TRUE),
       
       'f1744' => $this->input->post('f1744', TRUE),
       
       'f1745' => $this->input->post('f1745', TRUE),
       
       'f1746' => $this->input->post('f1746', TRUE),
       
       'f1747' => $this->input->post('f1747', TRUE),
       
       'f1748' => $this->input->post('f1748', TRUE),
       
       'f1749' => $this->input->post('f1749', TRUE),
       
       'f1750' => $this->input->post('f1750', TRUE),
       
       'f1751' => $this->input->post('f1751', TRUE),
       
       'f1752' => $this->input->post('f1752', TRUE),
       
       'f1753' => $this->input->post('f1753', TRUE),
       
       'f1754' => $this->input->post('f1754', TRUE),
       'userid' => $this->input->post('userid', TRUE),
       // 'userid'=>userid(),
       // 'datetime' => date("Y-m-d H:m:s")
        // 'userid' => userid(),
        'datetime' => NOW(),
        );
        $this->db->where('id', $id);
        $this->db->update('jawab_mhs', $data);
        /*'datetime' => date('Y-m-d H:i:s'),*/
    }

    function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('jawab_mhs'); 
       
    }

    //Update 07122013 SWI
    //untuk Array Dropdown
    function get_dropdown_array($value){
        $result = array();
        $array_keys_values = $this->db->query('select id, '.$value.' from jawab_mhs order by id asc');
        $result[0]="-- Pilih Urutan id --";
        foreach ($array_keys_values->result() as $row)
        {
            $result[$row->id]= $row->$value;
        }
        return $result;
    }

    //Update 30122014 SWI
    //untuk Array Dropdown dari database yang lain
    function get_drop_array($db,$key,$value){
        $result = array();
        $array_keys_values = $this->db->query('select '.$key.','.$value.' from '.$db.' order by '.$key.' asc');
        $result[0]="-- Pilih ".$value." --";
        foreach ($array_keys_values->result() as $row)
        {
            $result[$row->$key]= $row->$value;
        }
        return $result;
    }
    
}
?>
