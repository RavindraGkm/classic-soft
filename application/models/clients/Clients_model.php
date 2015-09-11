<?php
class Clients_model extends CI_Model {
    public function add_new_client($data) {
        $response = $this->db->query("INSERT INTO `clients_details` (`client_name`, `client_contact`, `client_address`) VALUES ('$data[f_name]','$data[c_contact]','$data[c_address]')");
        return $response;
    }

    public  function  show_all_client($query){
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