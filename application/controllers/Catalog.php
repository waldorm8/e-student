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
	    //$this -> load -> model('catalog');
      //$this -> catalog -> ;

			$this -> load -> view('partials/header');
			$this -> load -> view('catalog');
			$this -> load -> view('partials/footer');
		}
		else{
			redirect('login','refresh');
		}
  }

}
