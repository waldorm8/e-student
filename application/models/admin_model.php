<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function add_news($title, $text){
    $now = date("Y-m-d H:m:s");
    $data = array(
      'n_title' => $title,
      'n_text' => $text,
      'n_date' => $now
    );
    if($this->db->insert('news', $data)){
      return 1;
    }
    else{
      return 0;
    }

  }
}
