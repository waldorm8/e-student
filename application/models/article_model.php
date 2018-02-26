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

  public function delete_article($id){
    $this->db->where('n_id', $id);
    $query = $this->db->delete('news');

    if($query){
      return TRUE;
    }
    else{
      return FALSE;
    }
  }
  public function edit_article($id){
    $now = date("Y-m-d H:m:s");

    $title = $this -> input -> post('title');
    $text = $this -> input -> post('text');

    $data = array(
      'n_title' => $title,
      'n_text' => $text,
      'n_date' => $now
    );
    $this->db->where('n_id', $id);
    if($this->db->update('news', $data) == TRUE){
      return TRUE;
    }
    else{
      return FALSE;
    }
  }

}
