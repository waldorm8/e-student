<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    if($this -> session -> userdata('user_id') != NULL){
			$user_id = $this -> session -> userdata('user_id');
			$this -> session -> set_userdata('page', 'Katalog');
      $this -> load -> helper('file');
	    $this -> load -> model('catalog_model');
      $data['ways'] = $this -> catalog_model -> get_ways();
			$this -> load -> view('partials/header');
			$this -> load -> view('catalog', $data);
			$this -> load -> view('partials/footer');

      $dataForJson = $this -> catalog_model -> dataForJson();
      //print_r($dataForJson);
      $handle = fopen('jsonData.json', "w");
      //print_r(json_encode($dataForJson));
      if($handle):
        fputs($handle, json_encode($dataForJson));
        fclose($handle);
      else:
        echo "Nie otworzono pliku";
      endif;

		}
		else{
			redirect('login','refresh');
		}
  }

  public function add_ways(){
    if($this -> session -> userdata('user_id') != NULL && $this -> session -> userdata('role') == 'admin'){
			$user_id = $this -> session -> userdata('user_id');
			$this -> session -> set_userdata('page', 'Dodaj kierunki');
      $this -> load -> helper('form');
			$this -> load -> view('partials/admin_header');
			$this -> load -> view('admin_add_ways');
			$this -> load -> view('partials/admin_footer');
		}
		else{
			redirect('login','refresh');
		}
  }
  public function add_speciality(){
    if($this -> session -> userdata('user_id') != NULL && $this -> session -> userdata('role') == 'admin'){
      $user_id = $this -> session -> userdata('user_id');
      $this -> session -> set_userdata('page', 'Dodaj kierunki');
      $this -> load -> helper('form');
      $this -> load -> library('form_validation');

      $this->form_validation->set_rules('specName', "Nazwa specjalizacji", 'required', array('required' => "Pole %s jest wymagane"));
      $this->form_validation->set_rules('descSpec', "Opis specjalizacji", 'required', array('required' => "Pole %s jest wymagane"));

      if($this -> form_validation -> run() == FALSE){
        if($this -> input -> post('typeWay') == 1){
          $typeWay = "Licencjat";
        }
        elseif($this -> input -> post('typeWay') == 2){
          $typeWay = "Inżynier";
        }
        elseif($this -> input -> post('typeWay') == 3){
          $typeWay = "Magister";
        }
        $wayData = array(
          "sw_name" => $this -> input -> post('wayName'),
          "sw_type" => $typeWay,
          "d_id" => $this -> input -> post('department')
        );
        if($wayData['sw_name'] != NULL){
          $this -> load -> model('catalog_model');
          $sw_id = $this -> catalog_model -> save_way($wayData);
          if($sw_id != 0):
            $this -> session -> set_userdata("sw_id", $sw_id['0']['sw_id']);
          else:
            echo "Wystąpił błąd z id kierunku";
          endif;
        }

        $this -> load -> view('partials/admin_header');
        $this -> load -> view('add_speciality');
        $this -> load -> view('partials/admin_footer');
      }
      else{
        $specData = array(
          "sp_name" => $this -> input -> post("specName"),
          "sp_describe" => $this -> input -> post("descSpec"),
          "sw_id" => $this -> session -> userdata('sw_id')
        );
        $this -> load -> model('catalog_model');

        if($this -> catalog_model -> save_spec($specData)):
          $this -> session -> set_flashdata('addSuccess', "Pomyślnie dodano kierunek!");
          redirect('catalog/add_ways');
        else:
          $this -> session -> set_flashdata('addError', "Coś poszło nie tak!");
          redirect('catalog/add_ways');
        endif;
      }
    }
    else{
      redirect('login','refresh');
    }
  }
  public function just_speciality(){
    if($this -> session -> userdata('user_id') != NULL && $this -> session -> userdata('role') == 'admin'){
      $user_id = $this -> session -> userdata('user_id');
      $this -> session -> set_userdata('page', 'Dodaj specjalizacje');
      $this -> load -> helper('form');
      $this -> load -> library('form_validation');

      $this -> form_validation -> set_rules('way', "Kierunek studiów", 'required');
      $this -> form_validation -> set_rules('specName', "Nazwa specjalizacji", 'required');
      $this -> form_validation -> set_rules('descSpec', "Opis specjalizacji", 'required');

      if($this -> form_validation -> run() == FALSE){
        $this -> load -> model('catalog_model');
        $data['ways'] = $this -> catalog_model -> get_ways();
        $this -> load -> view('partials/admin_header');
        $this -> load -> view('add_just_speciality', $data);
        $this -> load -> view('partials/admin_footer');
      }
      else{
        $specData = array(
          'sw_id' => $this -> input -> post('way'),
          'sp_name' => $this -> input -> post('specName'),
          'sp_describe' => $this -> input -> post('descSpec')
        );
        $this -> load -> model('catalog_model');
        if($this -> catalog_model -> save_spec($specData)){
          $this -> session -> set_flashdata('addSuccess', "Pomyślnie dodano");
          redirect('catalog/just_speciality');
        }
        else{
          $this -> session -> set_flashdata('addError', "Wystąpił błąd");
          redirect('catalog/just_speciality');
        }
      }
    }
    else{
      redirect('login','refresh');
    }
  }

}
