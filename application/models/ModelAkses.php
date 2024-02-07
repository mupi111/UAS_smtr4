<?php 
	class ModelAkses extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function qr($email,$password)
		{
			return $this->db->query("SELECT * FROM tb_user WHERE email = '$email' AND password = '$password' ");
		}
	}
 ?>