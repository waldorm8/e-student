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

      $wayData = array(
        "sw_name" => $this -> input -> post('wayName'),
        "sw_type" => $this -> input -> post('typeWay'),
        "d_id" => $this -> input -> post('department')
      );


      $this -> load -> model('catalog_model');
      $this -> load -> view('partials/admin_header');
      $this -> load -> view('add_speciality');
      $this -> load -> view('partials/admin_footer');



    }
    else{
      redirect('login','refresh');
    }
  }

}
