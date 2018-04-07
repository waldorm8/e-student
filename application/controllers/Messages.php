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
      $this -> load -> helper('form');
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

  public function send_message(){
      $today = date('Y-m-d H:i:s');
      $this -> load -> library('form_validation');
      $this -> form_validation -> set_rules('titleMessage', 'Tytuł', 'required');
      $this -> form_validation -> set_rules('textMessage', 'Treśc', 'required');
      $this -> form_validation -> set_rules('toWho', 'Odbiorca', 'required');

      $this -> form_validation -> set_message('required', 'Pole {field} jest wymagane!');

      if($this -> form_validation -> run() == FALSE){
        $this -> load -> helper('form');
        $this -> index();
      }
      else{
        $this -> load -> model('messages_model');
        $data = array(
        'mess_title' => $this -> input -> post('titleMessage'),
        'mess_text' => $this -> input -> post('textMessage'),
        'mess_from_who' => $this -> session -> userdata('user_id'),
        'mess_to_who' => $this -> input -> post('toWho'),
        'mess_date' => $today,
        'mess_owner' => 0
        );

        if($this -> messages_model -> send_message($data) == 1){
          $this->session->set_flashdata('messSent', 'Wysłano wiadomość');
          redirect('messages', 'refresh');
        }
        else{
          $this -> session -> set_flashdata('messNotSent', "Coś poszło nie tak!");
          redirect('messages','refresh');
        }
      }
  }
}
