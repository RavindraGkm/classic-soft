<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {
    public function add_client() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('clients/add_clients');
    }
    public function add_new_client() {
        $this->load->database();
        $data['f_name'] = $this->input->post('f_name');
        $data['c_contact'] = $this->input->post('c_contact');
        $data['c_address']=$this->input->post('c_address');
        $this->load->model('clients/Clients_model');
        $response=$this->Clients_model->add_new_client($data);
        echo json_encode($response);
    }
    public function show_clients() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('clients/show_clients');
    }
    public function show_all_client(){
        $this->load->database();
        $this->load->helper("url");
        $this->load->model("clients/Clients_model");
        $response=$this->Clients_model->show_all_client("select * from `clients_details`");
        $res=array();
        foreach($response as $row) {
            $temp['id']=$row->id;
            $temp['client_name']=$row->client_name;
            $temp['client_contact']=$row->client_contact;
            $temp['client_address']=$row->client_address;
            $res[]=$temp;
        }
        $this->db->close();
        echo json_encode($res);
    }

    public function edit_clients($id) {
        $this->load->helper('html');
        $this->load->helper('url');
        $data['client_id']=$id;
        $this->load->view('clients/edit_clients',$data);
    }

    public function get_client_by_id(){
        $this->load->database();
        $id=$this->input->get('client_id');
        $this->load->model('clients/Clients_model');
        $response=$this->Clients_model->get_client_by_id($id);
        $this->db->close();
        echo json_encode($response);
    }

    public function update_client() {
        $this->load->database();
        $data['client_id']=$this->input->post('client_id');
        $data['client_name'] = $this->input->post('client_name');
        $data['client_contact'] = $this->input->post('client_contact');
        $data['client_address']=$this->input->post('client_address');
        $this->load->model('clients/Clients_model');
        $response = $this->Clients_model->update_client($data);
        if($response) {
            echo json_encode(array('status'=>'ok'));
        }
        else {
            echo json_encode(array('status'=>'failed'));
        }
    }
}
?>