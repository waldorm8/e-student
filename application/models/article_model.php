<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_article($which_one){
    if($which_one == 'all'){
      $articles = $this->db->get('news');

      return $articles_array = $articles -> result_array();
    }
    else{
      $query = $this->db->query('SELECT * FROM news WHERE n_id = '.$which_one.';');
      return $articles_array = $query -> result_array();
    }

  }

}
