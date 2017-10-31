<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		if($this -> session -> userdata('user_id') != NULL){
			$this -> session -> set_userdata('page', 'Strona główna');
			$this -> load -> view('partials/header');
			$this -> load -> view('dashboard');
			$this -> load -> view('partials/footer');
		}
		else{
			redirect('login','refresh');
		}
	}
	public function user_details(){
		$this -> session -> set_userdata('page', 'Dane studenta');
		$this -> load -> view('partials/header');
		$this -> load -> view('user-details');
		$this -> load -> view('partials/footer');
	}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */