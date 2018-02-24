<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		if($this -> session -> userdata('user_id') != NULL){
			$this -> session -> set_userdata('page', 'Strona główna');
			$this -> load -> model('user_model');
			$user_id = $this -> session -> userdata('user_id');
			$details = $this -> user_model -> get_details($user_id);
			$avatar = '';
			foreach($details as $row){
				$avatar = $row['st_photo'];
			}

			$this -> session -> set_userdata('avatar', $avatar);
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
