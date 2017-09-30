<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontroler extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
      $this -> load -> helper('form');
      $this -> load -> library('form_validation');

      $this -> form_validation->set_rules('imie', 'Imię', 'required');
      $this -> form_validation->set_rules('email', 'E-mail', 'required|valid_email');

      if ($this->form_validation->run() == FALSE)
      {
        $this->load->view('formularz');
        }
      else
      {
        $data['imie'] = $this->input->post('imie');
        $data['email'] = $this->input->post('email');
        $this->load->view('formularz_succes', $data);
      }
  }

}
