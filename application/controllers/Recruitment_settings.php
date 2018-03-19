<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recruitment_settings extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    if($this -> session -> userdata('user_id') != NULL && $this -> session -> userdata('role') == 'admin'){
      $this -> session -> set_userdata('page', 'Ustawienia rekrutacji');
      $this -> load -> view('partials/admin_header');
      $this -> load -> view('admin_recruitment_settings');
      $this -> load -> view('partials/admin_footer');
    }
    else{
      if($this -> session -> userdata('user_id') != NULL){
        redirect('dashboard', 'refresh');
      }
      else{
        redirect('login', 'refresh');
      }
    }
  }

}
