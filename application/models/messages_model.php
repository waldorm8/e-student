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
      $this->db->select('mess_title,mess_text,mess_date, st_login');
      $this->db->from('messages');
      $where = "to_who=".$towho." AND owner=0";
      $this->db->where($where);
      $this->db->join('student', 'student.st_id = messages.st_id');
      $query = $this->db->get();
      $result = $query -> result_array();
      $this -> session -> set_flashdata('dump', $result);

      return $result;
  }
  public function send_message(){
    $data = array(
      'mess_title' => $this -> input -> post('toWho'),
      'mess_text' => $this -> input -> post('titleMessage'),
      'st_id' => $this -> session -> userdata('user_id');
      //'to_who' => 
    )
    $this->db->insert('messages', $data);
  }
}
