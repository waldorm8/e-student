<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_details extends CI_Controller {
	public function index()
	{
		$this -> load -> helper('form');
		if($this -> session -> userdata('user_id') != NULL){
			$this -> session -> set_userdata('page', 'Dane studenta');
			$user_id = $this -> session -> userdata('user_id');
			$this -> load -> model('user_model');
			$data['data'] = $this -> user_model -> get_details($user_id);
			$this -> load -> view('partials/header');
			$this -> load -> view('user-details', $data);
			$this -> load -> view('partials/footer');
		}
		else{
			redirect('login','refresh');
		}
	}

	public function editing_details(){
		$this -> load -> library('form_validation');
		$this -> form_validation -> set_rules('name', 'Imię', 'trim|required', 'Wystąpił błąd');
		$this -> form_validation -> set_rules('surname', 'Nazwisko', 'trim|required', 'Wystąpił błąd');
		$this -> form_validation -> set_rules('street', 'Ulica', 'trim|required', 'Wystąpił błąd');
		$this -> form_validation -> set_rules('houseNumber', 'Numer domu', 'trim|required', 'Wystąpił błąd');
		$this -> form_validation -> set_rules('zipCode', 'Kod pocztowy', 'trim|required', 'Wystąpił błąd');
		$this -> form_validation -> set_rules('city', 'Miejscowość', 'trim|required', 'Wystąpił błąd');
		$this -> form_validation -> set_rules('pesel', 'Pesel', 'trim|required', 'Wystąpił błąd');
		$this -> form_validation -> set_rules('indexNumber', 'Numer Indeksu', 'trim|required', 'Wystąpił błąd');
		$this -> form_validation -> set_rules('dateOfBirth', 'Data urodzenia', 'trim|required', 'Wystąpił błąd');

		$this -> form_validation -> set_message('required', 'Pole {field} jest wymagane!');

		if($this -> form_validation -> run() == FALSE){
			$this -> load -> helper('form');
			$this -> load -> view('partials/header');
			$this -> load -> view('user-details');
			$this -> load -> view('partials/footer');
		}
		else{
			$student_details = array(
				'name' => $this -> input -> post('name'),
				'surname' => $this -> input -> post('surname'),
				'street' => $this -> input -> post('street'),
				'zipCode' => $this -> input -> post('zipCode'),
				'city' => $this -> input -> post('city'),
				'houseNumber' => $this -> input -> post('houseNumber'),
				'indexNumber' => $this -> input -> post('indexNumber'),
				'pesel' => $this -> input -> post('pesel'),
				'dateOfBirth' => $this -> input -> post('dateOfBirth')
			);
			$user_id = $this -> session -> userdata('user_id');
			$this -> load -> model('user_model');
			if($this -> user_model -> edit_details($student_details, $user_id)){
				$this -> session -> set_flashdata('success', "Dziękujemy za edycje danych!");
				redirect('user_details','refresh');
			}
			else{
				$this -> session -> set_flashdata('error', "Nie zeedytowano danych.");
				redirect('user_details','refresh');
			}


		}
	}

}

/* End of file User_details.php */
/* Location: ./application/controllers/User_details.php */