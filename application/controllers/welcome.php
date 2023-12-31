<?php

class Welcome extends CI_Controller
{
  public function index()
  {
    $data['barang'] = $this->model_barang->tampil_data()->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('dashboard', $data);
    $this->load->view('templates/footer');
  }

  public function search()
  {
    $data['barang'] = $this->model_barang->search_brg($this->input->get('search'));
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    if(count($data['barang']) == 0){
      $this->load->view('notfound');
    }
    else{
      $this->load->view('dashboard', $data);
    }
    $this->load->view('templates/footer');
  }
}
