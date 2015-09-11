<?php
class Items_model extends CI_Model {
    public function add_new_item($data) {
        $response = $this->db->query("INSERT INTO `item_details` (`item_category`, `item_name`, `item_code`, `d1`, `d2`, `d3`, `d4`) VALUES ('$data[category]', '$data[item_name]', '$data[item_code]', '$data[d1]', '$data[d2]', '$data[d3]', '$data[d4]')");
        return $response;
    }
    public  function  show_all_item($query){
        $this->load->database();
        $r=$this->db->query($query);
        $response=array();
        foreach($r->result()as $row){
            $response[]=$row;
        }
        $this->db->close();
        return $response;
    }
}
?>