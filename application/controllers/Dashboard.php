<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		if($this -> session -> userdata('user_id') != NULL){
			$this -> load -> view('dashboard');
		}
		else{
			redirect('login','refresh');
		}
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */