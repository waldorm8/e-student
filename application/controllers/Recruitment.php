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

  function save_conclusion(){

    $conclusion_details = array( // details from user conclusion
              'sw_id' => $this -> input -> post('way'),
              'st_id' => $this -> session -> userdata('user_id'),
              'rc_polish_degree' => $this -> input -> post('polish_degree'),
              'rc_math_degree' => $this -> input -> post('math_degree'),
              'rc_english_degree' => $this -> input -> post('english_degree'),
              'rc_st_additional' => $this -> input -> post('add_degree'),
              'rc_behavior' => $this -> input -> post('behavior_degree'),
              'rc_polish_score' => $this -> input -> post('polish_score'),
              'rc_math_score' => $this -> input -> post('math_score'),
              'rc_english_score' => $this -> input -> post('english_score'),
              'rc_add_score' => $this -> input -> post('additional_score')
    );


    $this -> load -> model('Recruitment_model');
    $errno = $this -> Recruitment_model -> save_conclusion($conclusion_details);
    if($errno == 1):
      $this -> session -> set_flashdata('good', "Wysłano formularz czekaj na wynik!");
      redirect('recruitment');
    elseif($errno == 345):
      $this -> session -> set_flashdata('baseerr', "Baza nie odpowiada");
      redirect('recruitment');
    elseif($errno == 404):
      $this -> session -> set_flashdata('detailserr', "Brak danych do wprowadzenia w bazie");
      redirect('recruitment');
    elseif($errno == 123):
      $this -> session -> set_flashdata('existerr', "Już Pani/Pan składała wniosek na ten kierunek!");
      redirect('recruitment');
    endif;
  }

}
