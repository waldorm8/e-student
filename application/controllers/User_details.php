<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_details extends CI_Controller {

	public function index()
	{
		$this -> load -> helper('form');
		if($this -> session -> userdata('user_id') != NULL){ // sprawdzenie czy uzytkownik jest zalogowany
			$this -> session -> set_userdata('page', 'Dane studenta');
			$user_id = $this -> session -> userdata('user_id');
			$this -> load -> model('user_model');
			$data['data'] = $this -> user_model -> get_details($user_id);
			$this -> load -> view('partials/header');
			$this -> load -> view('user-details', $data);
			$this -> load -> view('partials/footer');
		}
		else{ //jesli uzytkownik nie jest zalogowany to przekierowuje do strony logowania
			redirect('login','refresh');
		}
	}

	public function editing_details(){ //metoda odpowiadajaca za edycje danych studenta
		$this -> load -> library('form_validation'); // załadowanie biblioteki z walidacją formularzy
		//zasady walidacji formularza
		$config = array(
			  	array(
					'field' => 'name',
					'label' => 'Imię',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'surname',
					'label' => 'Nazwisko',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'street',
					'label' => 'Ulica',
					'rules' => 'trim|required'
			    ),
					array(
					'field' => 'houseNumber',
					'label' => 'Numer domu',
					'rules' => 'trim|required'
				),
					array(
					'field' => 'zipCode',
					'label' => 'Kod pocztowy',
					'rules' => 'trim|required'
				),
					array(
					'field' => 'city',
					'label' => 'Miejscowość',
					'rules' => 'trim|required'
				),
					array(
					'field' => 'pesel',
					'label' => 'Pesel',
					'rules' => 'trim|required'
				),
					array(
					'field' => 'indexNumber',
					'label' => 'Numer indeksu',
					'rules' => 'trim|required'
				),
					array(
					'field' => 'dateOfBirth',
					'label' => 'Data urodzenia',
					'rules' => 'trim|required'
				)	
		);
		/////////////////////////////////////////
		$this -> form_validation -> set_rules($config); // ustawienie zasad walidacji
		$this -> form_validation -> set_message('required', 'Pole {field} jest wymagane!'); // ustawienie komunikatu w razie walidacji
		////////////////////////////////////////////////
		$user_id = $this -> session -> userdata('user_id'); // id usera z sesji
		
		if($this->input->post('save_details') == "save_details"){ // sprawdzenie czy formularz został wysłany
			if($this -> form_validation -> run() == FALSE){ // sprawdzenie czy formularz został wykonany czy nie
				$this -> load -> helper('form');
				$data['form1_errors'] = validation_errors(); // przypisane błędów walidacji do zmiennej $data
				$this -> load -> view('partials/header');
				$this -> load -> view('user-details', $data); // załadowanie widoku z błedami formularza
				$this -> load -> view('partials/footer');
			}
			else{
				$student_details = array( // tabela z danymi przesłanymi z formularza
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
				$this -> load -> model('user_model'); //ładujemy model który załaduje nam dane do bazy
				if($this -> user_model -> edit_details($student_details, $user_id)){ //jeśli metoda się wykonała poprawnie to wyświetlamy komunikat
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

	public function editing_acc_details(){
		$this -> load -> library('form_validation');
		//zasady walidacji formularza
		$config = array(
				array(
					'field' => 'login',
					'label' => 'Login',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'email',
					'label' => 'E-mail',
					'rules' => 'trim|required'
				)
		);
		$this -> form_validation -> set_rules($config); //załadowanie zasad walidacji
		$this -> form_validation -> set_message('required', 'Pole {field} jest wymagane!'); // ustawienie wiadomości

		$user_id = $this -> session -> userdata('user_id'); // user_id z sesji wyciągniecie z bazy podczas logowania

		if($this->input->post('save_acc_details') == "save_acc_details"){ // sprawdzenie wysłania formularza
			if($this -> form_validation -> run() == FALSE){ //sprawdzenie czy formularz zostął poprawnie wysłany
				$this -> load -> helper('form');
				$data['form2_errors'] = validation_errors(); // zapisanie do tablicy bledow formularza
				$this -> load -> view('partials/header');
				$this -> load -> view('user-details', $data); // zaladowanie widoku razem z tablica z bledami
				$this -> load -> view('partials/footer');
			}
			else{
				//zapisanie do tablicy danych przeslanych z formularza
				$student_details = array(
					'login' => $this -> input -> post('login'),
					'email' => $this -> input -> post('email')
				);
				$this -> load -> model('user_model'); // zaladowanie modelu obslugujacego zapisanie danych do bazy
				if($this -> user_model -> edit_details($student_details, $user_id)){ //jesli metoda zostala wykonana poprawnie to wyswietlamy komunikat
					$this -> session -> set_flashdata('success_acc_details', "Dziękujemy za edycje danych!");
					redirect('user_details', 'refresh');
				}
				else{//w przeciwnym razie wyswietlamy komunikat o bledzie
					$this -> session -> set_flashdata('error_acc_details', "Nie zeedytowano danych.");
					redirect('user_details','refresh');
				}
			}
		}
	}
}

/* End of file User_details.php */
/* Location: ./application/controllers/User_details.php */