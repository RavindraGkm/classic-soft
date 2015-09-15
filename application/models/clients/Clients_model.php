<?php
class Clients_model extends CI_Model {

    public function add_new_client($data) {
        $response = array();
        if($this->db->query("INSERT INTO clients_details (`client_name`, `client_contact`, `client_address`) VALUES ('$data[f_name]','$data[c_contact]','$data[c_address]')")) {
            $response['status']=200;
            $response['msg']='Client Added Successfully';
        }
        else {
            $response['status']=500;
            $response['msg']='Internal Error Occured';
        }
        return $response;
    }
    public function show_all_client($query){
        $r=$this->db->query($query);
        $response=array();
        foreach($r->result()as $row){
            $response[]=$row;
        }
        return $response;
    }
    public function get_client_by_id($id){
        $query=$this->db->query("select * from clients_details where id=$id");
        $response=array();
        foreach($query->result() as $row){
            $response['client_address']=$row->client_address;
            $response['client_contact']=$row->client_contact;
            $response['client_name']=$row->client_name;
            $response['id']=$row->id;
            $response['count']=1;
        }
        return $response;
    }
}
?>