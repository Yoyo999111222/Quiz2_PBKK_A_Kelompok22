<?php

class Invoice extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    if ($this->session->userdata('role_id') != '2') {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Anda belum login!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </div>');
      redirect('auth/login');
    }
  }
  public function index()
  {
    $data['invoice'] = $this->model_invoice->tampil_data_userbiasa();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('invoice', $data);
    $this->load->view('templates/footer');
  }

  public function detail($id_invoice)
  {
    $data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
    $data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('detail_invoice', $data);
    $this->load->view('templates/footer');
  }

  public function search(){
    $data['invoice'] = $this->model_invoice->search_invoice_userbiasa($this->input->get('search'));
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    if(count($data['invoice']) == 0){
      $this->load->view('notfound');
    }
    else{
      $this->load->view('invoice', $data);
    }
    $this->load->view('templates/footer');
    
  }
}
