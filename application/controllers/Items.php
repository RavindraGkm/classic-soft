<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Items extends CI_Controller
{
  public function add_item()
  {
    $this->load->helper('html');
    $this->load->helper('url');
    $this->load->view('items/add_items');
  }

  public function add_new_item()
  {
    $this->load->database();
    $data['category'] = $this->input->post('category');
    $data['item_name'] = $this->input->post('item_name');
    $data['item_code'] = $this->input->post('item_code');
    $data['d1'] = $this->input->post('d1');
    $data['d2'] = $this->input->post('d2');
    $data['d3'] = $this->input->post('d3');
    $data['d4'] = $this->input->post('d4');
    $this->load->model('items/Items_model');
    $response = $this->Items_model->add_new_item($data);
    echo json_encode($response);
  }

  public function show_items()
  {
    $this->load->helper('html');
    $this->load->helper('url');
    $this->load->view('items/show_items');
  }

  public function show_all_item()
  {
    $this->load->helper("url");
    $this->load->model("items/Items_model");
    $response = $this->Items_model->show_all_item("select * from `item_details`");
    $res = array();
    foreach ($response as $row) {
      $temp['id'] = $row->id;
      $temp['item_category'] = $row->item_category;
      $temp['item_name'] = $row->item_name;
      $temp['item_code'] = $row->item_code;
      $temp['d1'] = $row->d1;
      $temp['d2'] = $row->d2;
      $temp['d3'] = $row->d3;
      $temp['d4'] = $row->d4;
      $res[] = $temp;
    }
    echo json_encode($res);
  }

  public function edit_items($id)
  {
    $this->load->helper('html');
    $this->load->helper('url');
    $data['item_id'] = $id;
    $this->load->view('items/edit_items', $data);
  }

  public function get_item_by_id()
  {
    $this->load->database();
    $data['id'] = $this->input->get('item_id');
    $this->load->model('items/Items_model');
    $response = $this->Items_model->get_item_by_id($data);
    $this->db->close();
    echo json_encode($response);
  }

  public function update_item()
  {
    $this->load->database();
    $data['item_id'] = $this->input->post('item_id');
    $data['category'] = $this->input->post('category');
    $data['item_name'] = $this->input->post('item_name');
    $data['item_code'] = $this->input->post('item_code');
    $data['d1'] = $this->input->post('d1');
    $data['d2'] = $this->input->post('d2');
    $data['d3'] = $this->input->post('d3');
    $data['d4'] = $this->input->post('d4');
    $this->load->model('items/Items_model');
    $response = $this->Items_model->update_item($data);
    if ($response) {
      echo json_encode(array('status' => 'ok'));
    } else {
      echo json_encode(array('status' => 'failed'));
    }
  }

}

?>