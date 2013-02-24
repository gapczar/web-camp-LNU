<?php
	Class Transaction_controller extends Super{
		public function __construct(){
			parent::__construct();
			session_Start();
			$this->transact_model	=	$this->model('transaction');
		}
		public function login(){
			if( isset($_POST) ){
				$username	=	$_POST['username'];
				$password	=	$_POST['password'];	
				
				$query_log	=	$this->transact_model->login( $username , $password);
				
				PRINT_R($query_log);
				
				if(!empty($query_log)){
					foreach( $query_log as $key){
						$_SESSION['userID']	=	$key['id'];
						$_SESSION['username']	=	$key['username'];
					}
				}else{
					echo "Authentication Not Match";
					exit();
				}
			}
		}
		public function signIn(){
			if( isset( $_POST )){
				$username	=	$_POST['username'];
				$password	=	$_POST['password'];
				$email		=	$_POST['email'];
				
				$query_log	=	$this->transact_model->signIn( $username , $password, $email );
				
				if( $query_log ){
					echo "Record Added";
				}else{
					echo "Something Went Wrong";
				}
			}
		}
		public function logout(){
			unset($_SESSION['userID']);
			unset($_SESSION['username']);
			session_destroy();
		}
	}
?>