<?php
class Logins_model extends CI_Model {

    public  function  login_check($data){
        $this->load->database();
        $query=$this->db->query("select * from `login` where `username`='$data[username]' and `password`='$data[password]'");
        $response=array();
        if($query->num_rows())
        {
            $response['status']=200;
            session_start();

            return $response;
        }
        else{
            $response['status']=401;
            return $response;
        }

    }
}
?>