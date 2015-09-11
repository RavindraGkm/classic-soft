<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logins extends CI_Controller {
    public function login_page() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('login/login');
    }

//        public function login_check(){
//            $this->load->database();
//            $data['username'] = $this->input->post('username');
//            $data['password'] = $this->input->post('password');
//            $this->load->model('logins/Logins_model');
//            $this->Logins_model->login_check("select * from `login` where ");
//            echo json_encode($data);
//        }
    public function login_check(){
        $this->load->database();
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        $this->load->model('logins/Logins_model');
        $response=$this->Logins_model->login_check($data);
        $this->db->close();
        echo json_encode($response);
    }

    public function add_items(){
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('items/add_items');
    }
}
?>