<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class catalog_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_ways(){
    /*$this->db->select('*');
    $this->db->from('speciality');
    $this->db->join('study_way', 'study_way.sw_id = speciality.sw_id');
    $query = $this->db->get();*/


    $this->db->select('*');
    $this->db->from('study_way');
    $query = $this->db->get();
    return($query -> result_array());
  }

}
