<?php
class Items_model extends CI_Model {
    public function add_new_item($data) {
        $response = array();
        if($this->db->query("INSERT INTO `item_details` (`item_category`, `item_name`, `item_code`, `d1`, `d2`, `d3`, `d4`) VALUES ('$data[category]', '$data[item_name]', '$data[item_code]', '$data[d1]', '$data[d2]', '$data[d3]', '$data[d4]')")) {
            $response['status']=200;
            $response['msg']='Item Added Successfully';
        }
        else {
            $response['status']=500;
            $response['msg']='Internal Error Occured';
        }
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
    public function get_item_by_id($data) {
        $query=$this->db->query("select * from item_details where id='$data[id]'");
        $response=array();
        foreach($query->result() as $row){
            $response[]=$row;
        }
        return $response;
    }
}
?>