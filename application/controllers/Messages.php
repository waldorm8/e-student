<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    if($this -> session -> userdata('user_id') != NULL){
			$user_id = $this -> session -> userdata('user_id');
			$this -> session -> set_userdata('page', 'Wiadomości');
      $this -> load -> model('Messages_model');
      $data['data'] = $this -> Messages_model -> show_messages($user_id);


      $this -> load -> view('partials/header');
      $this -> load -> view('messages',$data);
      $this -> load -> view('partials/footer');
    }
    else{
      redirect('login','refresh');
    }
  }
}
