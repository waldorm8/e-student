<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show_conclusions extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    if($this -> session -> userdata('user_id') != NULL && $this -> session -> userdata('role') == 'admin'){
      $this -> session -> set_userdata('page', 'Wnioski');
      $this -> load -> model('Recruitment_model');
      $data['data'] = $this -> Recruitment_model -> show_conclusions('all');
      $this -> load -> view('partials/admin_header');
      $this -> load -> view('show_conclusions', $data);
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
