<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
  	{
    	parent::__construct();
   	 	//Codeigniter : Write Less Do More
  	}

	public function index()
	{
		$this -> load -> helper('form');
		if($this -> session -> userdata('user_id') != NULL){
			$this -> load -> view('partials/header');
			$this -> load -> view('dashboard');
			$this -> load -> view('partials/footer');
		}
		else{
			$this ->load->view('login');
		}
	}
    // metoda odpowiadajaca za logowanie
    public function get_login()
	{
		$this -> load -> library('form_validation'); // ladujemy biblioteke dla formularzy
		$this -> form_validation-> set_rules('login', 'Login', 'trim|required', 'Wystąpił błąd');
		$this -> form_validation-> set_rules('password', 'Hasło', 'trim|required', 'Wystąpił błąd');

		$this -> form_validation -> set_message('required', 'Pole {field} jest wymagane!');


		if($this -> form_validation->run() == FALSE){
			$this -> load -> helper('form');
			$this -> load -> view('login');
		}
		else{
			$login = $this -> input -> post('login');
			$password = $this -> input -> post('password');

			$this -> load -> model('user_model');
			$this -> load -> model('log_model');
			$user = $this -> user_model -> login($login, $password);
			if($user){
				$this -> session -> set_userdata('user_id', $user['st_id']);
				$this -> session -> set_userdata('user_email', $user['st_email']);

				$this->session->set_flashdata('success', 'Logowanie przebiegło pomyślnie!');
				//$this -> log_model -> save_log($this->input->ip_address(),date("Y-m-d H:m:s"),$login,$this->session->flashdata('success'));

				if($user['st_role'] != 'a'){
					redirect('dashboard');
				}
				else{
					$this -> session -> set_userdata('role', 'admin');
					redirect('admin');
				}
			}
			else{
				$this->session->set_flashdata('error', 'Podany login lub hasło są nieprawidłowe.');
				//$this -> log_model -> save_log($this->input->ip_address(),date("Y-m-d H:m:s"),$login,$this->session->flashdata('error'));
				redirect('login');
			}
		}
	}
	//metoda odpowiada za rejestracja
	public function get_register(){
		$this -> load -> library('form_validation'); // ladujemy biblioteke z formularzami
		// ustawiamy warunki dla formularzy
		$this -> form_validation -> set_rules('name', 'Imię', 'trim|required');
		$this -> form_validation -> set_rules('surname', 'Nazwisko', 'trim|required');
		$this -> form_validation -> set_rules('registerLogin', 'Login', 'trim|required');
		$this -> form_validation -> set_rules('registerPassword', 'Hasło', 'required');
		$this -> form_validation -> set_rules('email', 'E-mail', 'required');
		//$this -> form_validation -> set_message('required', 'Pole {field} jest wymagane!');
		//jesli formularz niezostal wyslany wczytujemy widok logowania
		if($this -> form_validation -> run() == FALSE){
			$this -> load -> helper('form');
			$this -> load -> view('login');
		}
		else{ //w przeciwnym wypadku zczytujemy dane i zapisujemy do tabeli.
			$user_details = array(
				'st_name' => $this -> input -> post('name'),
				'st_surname' => $this -> input -> post('surname'),
				'st_login' => $this -> input -> post('registerLogin'),
				'st_password' => $this -> input -> post('registerPassword'),
				'st_email' => $this -> input -> post('email'),
			);

			$this -> load -> model('user_model'); //ladujemy nasz model
			// uzywamy metody register z naszego modelu.
			if($register = $this -> user_model -> register($user_details) == 0){ //jeśli metoda register zwroci 0 < -- uzytk istnieje
				//wyswietlenie powiadomienia za taki uzytkownik juz istnieje
				$this->session->set_flashdata('userExist', 'Podany uzytkownik już istnieje lub coś poszło nie tak.');
				redirect('login', 'refresh');
			}
			else{ // w przeciwnym razie zarejestrowano pomyślnie!
				$this -> session -> set_flashdata('registerSuccess', "Zarejestrowano pomyślnie!");
				redirect('login','refresh');
			}
		}
	}

	//metoda odpowiadająca za wylogowanie
	public function logout(){
		$this -> session -> sess_destroy();
		redirect('login');
	}

}

/* End of file index.php */
/* Location: ./application/controllers/index.php */
