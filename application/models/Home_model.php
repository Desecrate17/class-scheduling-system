<?php
class Home_model extends CI_Model{
	public function __construct(){
		parent:: __construct();
	}
	public function login_check($user, $pass){
		$query = $this->db->query("
			SELECT us.user_id, us.username, us.password, us.usertype
			FROM user us
			LEFT JOIN faculty as f
			ON f.prof_id = us.user_id			
			WHERE us.username = '$user' AND us.password = '$pass'
		");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return NULL;
		}					
	}
}