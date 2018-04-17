<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class catalog_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_ways(){
    $this->db->select('*');
    $this->db->from('study_way');
    $query = $this->db->get();
    return($query -> result_array());
  }
  public function dataForJson(){
    $this->db->select('*');
    $this->db->from('speciality');
    $query = $this->db->get();
    return $query -> result_array();
  }
  public function save_way($data){
    if($this->db->insert('study_way', $data)):
      $this -> db -> select('sw_id');
      $this -> db -> from('study_way');
      $this-> db ->where('sw_name', $data['sw_name']);
      $query = $this -> db -> get();
      return($query -> result_array());
    else:
      return 0;
    endif;
  }
  public function save_spec($data){
    if($this->db->insert('speciality', $data)):
      return 1;
    else:
      return 0;
    endif;
  }
}
