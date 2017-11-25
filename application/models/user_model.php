<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	//nazwy tabeli z ktorych bedziemy korzystac w modelu
	public $table = 'student';

	public function login($login, $password){

		$where = "st_email = '".$login."' OR st_login = '".$login."'"; // wyciagamy hash z bazy
		$query = $this -> db -> where($where) -> get($this -> table);

		foreach ($query -> result_array() as $row) {
			$hash = $row['st_password']; //przypisujemy hash do zmiennej
			$counted_bad_login = $row['st_bad_login_count'];
			$date_of_last_login = $row['st_date_bad_login'];
		}


		if(password_verify($password, $hash)){            // porownujemy czy hashe haseł się zgadzają
			$where = "st_email = '".$login."' OR st_login = '".$login."'";
			$this -> db -> set('st_bad_login_count', 0);
			$this -> db -> set('st_date_bad_login', NULL);
			$this -> db -> where('st_login', $login);
			$this -> db -> update($this -> table);
			return $this -> db -> where($where) -> get($this -> table)->row_array();
			//jesli email lub login zwrócą jedno konto to zwróci 1
		}
		else{ // jesli hashe sie nie zgadzaja to wyrzuci blad
			if($counted_bad_login <= 2){
				$this -> db -> set('st_bad_login_count', 'st_bad_login_count+1', FALSE);
				$this -> db -> set('st_date_bad_login', date("Y-m-d H:i:s"));
				$this -> db -> where('st_login', $login);
				$this -> db -> update($this -> table);
				return 0;
			}
			else{
				if($counted_bad_login == 3){
					$today = date('Y-m-d H:i:s');
					$today = strtotime($today);
					$date_of_last_login = strtotime($date_of_last_login);
					$diff = round(($today-$date_of_last_login)/60);

					if($diff >= 5){
						$this -> db -> set('st_bad_login_count', 0);
						$this -> db -> set('st_date_bad_login', NULL);
						$this -> db -> where('st_login', $login);
						$this -> db -> update($this -> table);
						redirect('login','refresh');
					}
				}
				$this -> session -> set_flashdata('TooMuchTryin', 'Zbyt wiele nie poprawnych prób logownia, odczekaj 5 minut');
				redirect('login','refresh');
			}
		}
	}

	public function register($user_details){
		/*$user_details = array(
			'st_name' => $name,
			'st_surname' => $surname,
			'st_login' => $login,
			'st_password' => $password,
			'st_email' => $email,
			STRUKTURA PRZEKAZANEJ TABELI
		);*/
		if($user_details['st_password'] = password_hash($user_details['st_password'], PASSWORD_DEFAULT)){

			$where = "st_login = '".$user_details['st_login']."' OR st_email = '".$user_details['st_email']."'";
			$query = $this -> db -> where($where);

			if($this -> db -> count_all_results($this -> table) == 0){
				// jesli zwroci 0 to mozna rejestrowac
		 		$this -> db -> insert($this -> table, $user_details);
		 		return 1;
			}
			else{
				return 0;
			}
		}
		else{
			return 0;
		}
	}
	public function get_details($user_id){
		$query = $this -> db -> where('st_id =', $user_id) -> get($this -> table);

		return $result = $query -> result_array();
	}

	public function edit_details($details, $user_id){
		$student_details = array(
				'st_name' => $details['name'],
				'st_surname' => $details['surname'],
				'st_street' => $details['street'],
				'st_zipcode' => $details['zipCode'],
				'st_city' => $details['city'],
				'st_house_number' => $details['houseNumber'],
				'st_indeks' => $details['indexNumber'],
				'st_pesel' => $details['pesel'],
				'st_birth_date' => $details['dateOfBirth']
			);
		$this -> db -> where('st_id =', $user_id);
		if($this -> db -> update($this -> table, $student_details)){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */

//require('application/models/log_model.php');