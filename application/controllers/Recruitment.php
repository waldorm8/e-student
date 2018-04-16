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
      $user_id = $this->session->userdata('user_id');
      $this -> load -> helper('form');
      $this -> load -> model('Recruitment_model');
      $ways['ways'] = $this -> Recruitment_model -> get_study_way('all');
      $data['data'] = $this -> Recruitment_model -> show_conclusions(null, $user_id);
      $all = $data + $ways;
      //print_r($all);
      //exit();
      $this -> session -> set_userdata('page', 'Rekrutacja');
      $this -> load -> view('partials/header');
      $this -> load -> view('recruitment', $all);
      $this -> load -> view('partials/footer');

      //$data['data'] = $this -> Recruitment_model -> show_conclusions(null, $user_id);
      //$this -> load -> view('partials/header');
      //$this -> load -> view('recruitment', $data);
      //$this -> load -> view('partials/footer');
    }
    else{
      redirect('login', 'refresh');
    }
  }

  public function calculate_points($scores, $rates){
    /*
      polish*0.6*waga(0.35)
      math*0,6*waga(0,05)
      english*0.6*waga(0,3)
      additional*1*waga(0,15)
    */
    if(isset($scores) && isset($rates)){
      $polish_result = $scores['polish']*$rates['polish_rate']*$rates['polish_wage'];
      $math_result = $scores['math']*$rates['math_rate']*$rates['math_wage'];
      $english_result = $scores['english']*$rates['english_rate']*$rates['english_wage'];
      $additional_result = $scores['additional']*$rates['add_rate']*$rates['add_wage'];
      $result = $polish_result+$math_result+$english_result+$additional_result;
      return $result;
    }
    else{
      return 'error';
    }
  }

  function save_conclusion(){
    $today = date('Y-m-d H:i:s');
    $conclusion_details = array( // details from user conclusion
              'sw_id' => $this -> input -> post('way'),
              'st_id' => $this -> session -> userdata('user_id'),
              'rc_polish_degree' => $this -> input -> post('polish_degree'),
              'rc_math_degree' => $this -> input -> post('math_degree'),
              'rc_english_degree' => $this -> input -> post('english_degree'),
              'rc_st_additional' => $this -> input -> post('add_degree'),
              'rc_average_degree' => $this -> input -> post('average_degree'),
              'rc_behavior' => $this -> input -> post('behavior_degree'),
              'rc_polish_score' => $this -> input -> post('polish_score'),
              'rc_math_score' => $this -> input -> post('math_score'),
              'rc_english_score' => $this -> input -> post('english_score'),
              'rc_add_score' => $this -> input -> post('additional_score'),
              'rc_points' => 0,
              'rc_date' => $today
    );

    $scores = array(
      'polish' => $this->input->post('polish_score'),
      'math' => $this->input->post('math_score'),
      'english' => $this->input->post('english_score'),
      'additional' => $this->input->post('additional_score')
    );

    $rates = array(
        'polish_rate' => 0.6,
        'polish_wage' => 0.35,
        'math_rate' => 0.6,
        'math_wage' => 0.05,
        'english_rate' => 0.6,
        'english_wage' => 0.3,
        'add_rate' => 1,
        'add_wage' => 0.15
    );

    $points = $this -> calculate_points($scores, $rates);
    $conclusion_details['rc_points'] = $points;

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
