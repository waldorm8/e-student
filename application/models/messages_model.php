<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  /*private function get_sender_details($id_usera){
    $this->db->select('st_name, st_surname');
    $this->db->from('student');
    $this->db->where('st_id', $id_usera);
    $query=$this->db->get();
    $result = $query -> result_array();
    return $result;
  }*/
  public function show_messages($towho){
      $this->db->select('st_login,mess_title,mess_text,mess_date, mess_from_who');
      $this->db->from('messages');
      $where = "mess_to_who=".$towho." AND mess_owner=0";
      $this->db->where($where);
      $this->db->join('student', 'student.st_id = messages.mess_from_who');
      $query = $this->db->get();
      $result = $query -> result_array();
      $this -> session -> set_flashdata('dump', $result);

      return $result;
  }

  public function send_message($data){


    print_r($data);
    if(is_numeric($data['mess_to_who'])){
      echo "tak jest numerem";
    }
    else{
      echo "nie jest numerem";
    }


    exit();
    if($this->db->insert('messages', $data)){
      return 1;
    }
    else{
      return 0;
    }
  }
}
