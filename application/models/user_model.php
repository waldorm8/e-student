<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	//nazwy tabeli z ktorych bedziemy korzystac w modelu
	public $table = 'student';

	public function login($login, $password){

		$where = "st_email = '".$login."' OR st_login = '".$login."' AND st_password = '".$password."'";

		return $this -> db -> where($where) -> get($this -> table)->row_array();
		//jesli email i password beda się zgadzac to zwroci nam ilosc wierszy a jak nie to 0.
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

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */