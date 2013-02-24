<?php
	Class transaction_model extends Super{
		public function __construct(){
			parent::__construct();
		}
		
		public function login( $username = null, $password=	null ){
			
			$password	=	$this->hash_pass( $password );
			
			$sql		=	"select id, username from tbl_users where username = :username and password: :password";
			
			$query		=	$this->db->prepare($sql);
			
			$query->execute( array( ':username' => $username , ':password' => $password ));
			
			return $query->fetchAll(PDO::FETCH_ASSOC);
			
		}
		
		private function hash_pass( $password ){
			
			$pass1	=	md5($password);
			$pass2	=	md5('LeyteNormalUniveristy');
			
			return md5($pass1.$pass2);
		}
		
		public function signIn( $username = null, $password = null, $email = null ){
			
			$sql	=	"INSERT into tbl_users values(:username,:password,:email)";
			
			$query		=	$this->db->prepare($sql);
			
			$query->execute( array( ":username" => $username, ":password" => $this->hash_password($password), ":email" => $email ));
		}
		
	}
?>