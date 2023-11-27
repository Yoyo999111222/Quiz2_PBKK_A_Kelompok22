<?php

class Kategori extends CI_Controller
{
  public function review()
  {
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('review');
    $this->load->view('templates/footer');
  }

  public function reward()
  {
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('reward');
    $this->load->view('templates/footer');
  }

  public function lokasi()
  {
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('lokasi');
    $this->load->view('templates/footer');
  }
}
