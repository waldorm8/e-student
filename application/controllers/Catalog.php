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

}
