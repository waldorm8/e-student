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

  public function show_conclusions($which, $whichStudent){
    if($which == "all" && $whichStudent == NULL):
      $this->db->select('*');
      $this->db->from('recruitment_conclusion');
      $this->db->join('student', 'student.st_id = recruitment_conclusion.st_id');
      $this->db->join('study_way', 'study_way.sw_id = recruitment_conclusion.sw_id');
      $this->db->order_by('rc_points', 'DESC');
      $query = $this->db->get();
      //var_dump($query -> result_array());
      return $query -> result_array();
    elseif(is_numeric($which) && $whichStudent == NULL):
      $this->db->select('*');
      $this->db->from('recruitment_conclusion');
      $this->db->where('rc_id', $which);
      $query=$this->db->get();
      return $query -> result_array();
    elseif($which == NULL && is_numeric($whichStudent)):
      $this->db->select('*');
      $this->db->from('recruitment_conclusion');
      $this->db->join('study_way', 'study_way.sw_id = recruitment_conclusion.sw_id');
      $this->db->where('st_id', $whichStudent);
      $query = $this->db->get();
      return $query -> result_array();
    endif;
  }

  public function change_flag($id_rc){
    $this -> db -> select('*');
    $this -> db -> from('recruitment_conclusion');
    $this -> db -> where('id_rc', (int)$id_rc);
    $query = $this -> db -> get();
    $result = $query -> result_array();

    $flag = null;
    foreach($result as $row){
      $flag = $row['rc_flag'];
    }


    if($flag == 'p'):
      $data = array(
        'rc_flag' => 'o'
      );
    elseif($flag == 'o'):
      $data = array(
        'rc_flag' => 'p'
      );
    endif;

    if($flag != null){
      $this->db->where('id_rc', $id_rc);
      if($this->db->update('recruitment_conclusion', $data)):
        return 1;
      else:
        return 0;
      endif;
    }
  }
}
