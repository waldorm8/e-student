<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recruitment_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_study_way($which_one){
    if($which_one == "all"){
      $query = $this->db->get('study_way');

      return $ways_arrays = $query -> result_array();
    }
    else{
      if(is_numeric($which_one)){
        $this->db->get('study_way');
        $query = $this->db->where('id', $which_one);
        return $one_way = $query -> result_array();
      }
    }
  }
}
