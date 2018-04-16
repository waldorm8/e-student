<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Recruitment.php';
class Show_conclusions extends Recruitment{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index(){
    if($this -> session -> userdata('user_id') != NULL && $this -> session -> userdata('role') == 'admin'){
      $this -> session -> set_userdata('page', 'Wnioski');
      $this -> load -> helper('form');
      $this -> load -> model('Recruitment_model');
      $data['data'] = $this -> Recruitment_model -> show_conclusions('all', null);
      $this -> makeJsonFile();
      $this -> load -> view('partials/admin_header');
      $this -> load -> view('admin_show_conclusions', $data);
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

  public function change_flag(){
    $this->load->helper('url');
    $rc_id = $this ->uri->segment(3);
    $this -> load -> model('Recruitment_model');
    if($this -> Recruitment_model -> change_flag($rc_id)):
      redirect('show_conclusions');
    else:
      redirect('show_conclusions');
    endif;
  }

  public function delete_conclussion(){
    $conclussion_id = $this -> uri -> segment(3);
    $this -> load -> model('Recruitment_model');
    if($this -> Recruitment_model -> delete_conclussion($conclussion_id)){
      $this -> session -> set_flashdata("deletedConc", "Pomyślnie usunięto wniosek.");
      redirect('show_conclusions');
    }
    else{
      $this -> session -> set_flashdata("deleteError", "Wystąpił błąd podczas usuwania wniosku.");
      redirect('show_conclusions');
    }
  }

  public function makeJsonFile(){
    $this -> load -> model('Recruitment_model');
    $dataForJson = $this -> Recruitment_model -> show_conclusions('all', null);
    //print_r($dataForJson);
    $handle = fopen('jsonConclusion.json', "w");
    //print_r(json_encode($dataForJson));
    if($handle):
      fputs($handle, json_encode($dataForJson));
      fclose($handle);
    else:
      echo "Nie otworzono pliku";
    endif;
  }

  public function edit_conclusion(){
    $this -> load -> model('Recruitment_model');
    $id_rc = $this -> input -> post('zapisz');
    $data = array(
      'rc_polish_degree' => $this->input->post('polish_degree'),
      'rc_math_degree' => $this->input->post('math_degree'),
      'rc_english_degree' =>$this->input->post('english_degree'),
      'rc_st_additional' =>$this->input->post('add_degree'),
      'rc_average_degree' =>$this->input->post('average_degree'),
      'rc_polish_score' =>$this->input->post('polish_score'),
      'rc_math_score' =>$this->input->post('math_score'),
      'rc_english_score' =>$this->input->post('english_score'),
      'rc_add_score'=>$this->input->post('additional_score'),
      'rc_behavior' =>$this->input->post('behavior_degree'),
      'rc_points' => 0
    ); // trzeba jeszcze raz odpalic metode przleiczajaca punkty itd i wtedy zapisywac do bazy

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

    $scores = array(
      'polish' => $this->input->post('polish_score'),
      'math' => $this->input->post('math_score'),
      'english' => $this->input->post('english_score'),
      'additional' => $this->input->post('additional_score')
    );

    $points = $this -> calculate_points($scores, $rates);

    $data['rc_points'] = $points;

    if($this -> Recruitment_model -> edit_conclusion($id_rc, $data)){
      $this->session->set_flashdata('editSucc', "Pomyslnie zeedytowano dane");
      redirect('show_conclusions');
    }
    else{
      $this->session->set_flashdata('editErr', "Pomyslnie zeedytowano dane");
      redirect('show_conclusions');
    }
  }

}
