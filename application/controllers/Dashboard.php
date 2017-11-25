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
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */