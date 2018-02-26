<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function index()
  {
    if($this -> session -> userdata('user_id') != NULL && $this -> session -> userdata('role') == 'admin'){
      $this -> session -> set_userdata('page', 'PANEL ADMINISTRATORA');
      $this -> load -> model('Article_model');
			$articles['articles'] = $this -> Article_model -> get_article('all');
      $this -> load -> view('partials/admin_header');
      $this -> load -> view('admin_dashboard', $articles);
      $this -> load -> view('partials/admin_footer');
    }
    else{
      if($this -> session -> userdata('user_id') != NULL){
        redirect('dashboard', 'refresh');
      }
      else{
        redirect('login', 'refresh');
      }
    }
  }

  public function add_news(){
    if($this -> session -> userdata('user_id') != NULL && $this -> session -> userdata('role') == 'admin'){
      $this -> session -> set_userdata('page', 'Dodaj komunikat');

      $this -> load -> library('form_validation');

      $this -> form_validation -> set_rules('title', 'Tytuł', 'required');
      $this -> form_validation -> set_rules('text', 'Tekst', 'required');

      if($this -> form_validation -> run() == FALSE){
        $this -> load -> helper('form');
        $this -> load -> view('partials/admin_header');
        $this -> load -> view('add_news');
        $this -> load -> view('partials/admin_footer');
      }
      else{
        $text = $this -> input -> post('text');
        $title = $this -> input -> post('title');

        $this -> load -> model('admin_model');
        if($this -> admin_model -> add_news($title, $text) == 1){
          $this -> session -> set_flashdata('Done', 'Dodano komunikat');
          redirect('admin/add_news', 'refresh');
        }
        else{
          $this -> session -> set_flashdata('Bad', 'Nie dodano komunikatu');
          redirect('admin/add_news', 'refresh');
        }

      }
    }
    else{
      redirect('login', 'refresh');
    }

  }

  public function delete_news(){
    $id = $this -> input -> get('id', TRUE);
    $this -> load -> model('Article_model');
    if($this -> Article_model -> delete_article($id) == TRUE){
      redirect('admin');
    }
    else{
      echo "Coś poszło nie tak z zapytaniem usuwającym";
    }
  }
  public function edit_news(){

    if($this -> session -> userdata('user_id') != NULL && $this -> session -> userdata('role') == 'admin'){
      $id = $this -> input -> get('id', TRUE);
      $this -> load -> model('Article_model');
      $articles['articles'] = $this -> Article_model -> get_article($id);
      $this -> load -> library('form_validation');
      $this -> form_validation -> set_rules('title', 'Tytuł', 'required');
      $this -> form_validation -> set_rules('text', 'Tekst', 'required');
      if($this -> form_validation -> run() == FALSE){
        $this -> load -> helper('form');
        $this -> load -> view('partials/admin_header');
        $this -> load -> view('add_news', $articles);
        $this -> load -> view('partials/admin_footer');
      }
      else{
        if($this -> Article_model -> edit_article($id) == TRUE){
          $this -> session -> set_flashdata('edit_done', 'Poprawnie zeedytowano tekst.');
          redirect('admin/edit_news?id='.$id);
        }
        else{
          $this -> session -> set_flashdata('edit_bad', 'Wystąpił błąd podczas edycji');
          redirect('admin/edit_news?id='.$id);
        }


      }
      /*if($this -> Article_model -> edit_article($id) == TRUE){
          $this -> session -> set_flashdata('edit_done', 'Zeedytowano poprawnie wpis!');
          redirect('admin/edit_news?id='.$id);
      }
      else{
        $this -> session -> set_flashdata('edit_bad', 'Wystąpił błąd podczas edycji!');
        redirect('admin/edit_news?id='.$id);
      }*/
    }
  }

}
