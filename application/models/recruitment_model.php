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

  public function save_conclusion($details){
    //nie pozwolic na zapisanie w przypadku gdy juz istnieje wpis z takim samym id studenta I id kierunku
    $this->db->select('st_id, sw_id');
    $where = "st_id ='".$details['st_id']."' AND sw_id = '".$details['sw_id']."';";
    $this->db->where($where);
    $counted_conclusion = $this->db->count_all_results('recruitment_conclusion',false);
    if($counted_conclusion == 0):
      if(isset($details)):
        if($this->db->insert('recruitment_conclusion', $details)):
          return 1;
        else:
          return 345;
        endif;
      else:
        //can be error
        return 404;
      endif;
    else:
      return 123;
    endif;
  }

  public function show_conslusion($which){

  }
}
