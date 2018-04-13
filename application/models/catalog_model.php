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
}
