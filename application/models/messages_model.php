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
      $this->db->select('mess_id, st_login, mess_title, mess_text, mess_date, mess_from_who');
      $this->db->from('messages');
      $where = "mess_to_who=".$towho."";
      $this->db->where($where);
      $this->db->join('student', 'student.st_id = messages.mess_from_who');
      $query = $this->db->get();
      $result = $query -> result_array();
      $this -> session -> set_flashdata('dump', $result);

      return $result;
  }

  public function send_message($data){
    if(is_numeric($data['mess_to_who'])){
      if($this->db->insert('messages', $data)):
        return 1;
      else:
        return 0;
      endif;
    }
    else{
      $this->db->select('st_id');
      $this->db->from('student');
      $this->db->where('st_login', $data['mess_to_who']);
      $query = $this->db->get();
      $result = $query -> row();
      $to_who = $result -> st_id;

      $data['mess_to_who'] = $to_who;

      if($this->db->insert('messages', $data)):
        return 1;
      else:
        return 0;
      endif;
    }
  }

  public function delete_message($mess_id){
    $this->db->where('mess_id', $mess_id);
    if($this->db->delete('messages') == 1):
      return 1;
    else:
      return 0;
    endif;
  }
}
