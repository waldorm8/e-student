ci <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_model extends CI_Model{
	public function save_log($ip, $date, $login, $condition){
		$data = array(
			'hl_ip' => $ip,
			'hl_date' => $date,
			'hl_login' => $login,
			'hl_condition' => $condition
		);
		$this -> db -> insert('history_login', $data);
	}
	public function check_log($ip, $login){
		$where = "hl_ip ='".$ip."' AND hl_login = '".$login."' AND hl_condition='Podany login lub hasło są nieprawidłowe.'";

		$query = $this -> db -> where($where) -> get('history_login');
		$array_logs = array();
		return $wynik = $query -> result_array();
		
	}
}

/* End of file log_model.php */
/* Location: ./application/models/log_model.php */