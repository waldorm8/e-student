<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recruitment extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    if($this -> session -> userdata('user_id') != NULL){
      $this -> load -> helper('form');
      $this -> load -> model('Recruitment_model');
      $ways['ways'] = $this -> Recruitment_model -> get_study_way('all');
      $this -> session -> set_userdata('page', 'Rekrutacja');
      $this -> load -> view('partials/header');
      $this -> load -> view('recruitment', $ways);
      $this -> load -> view('partials/footer');
    }
    else{
      redirect('login', 'refresh');
    }
  }

}
