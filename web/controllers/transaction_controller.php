<?php
	Class Transaction_controller extends Super{
		public function __construct(){
			parent::__construct();
			session_start();
			$this->transact_model	=	$this->model('transaction');
		}
		public function login(){
			if( isset($_POST) ){
				$username	=	$_POST['username'];
				$password	=	$_POST['password'];	
				
				$query_log	=	$this->transact_model->login( $username , $password);
				// print_r($query_log);
				if(is_array($query_log)){
					$udata = $query_log['u_data'];
					$sess_data = $query_log['session_data'];
					foreach( $udata as $key){
						$_SESSION['userID']	=	$key['id'];
						$_SESSION['username']	=	$key['username'];
						$_SESSION['session_id'] = $key['password']."|".$key['id'];
					}
					$_SESSION['is_login'] = $sess_data;
					echo json_encode($query_log);
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
			unset($_SESSION['session_id']);
			session_destroy();
			header("location:".base_url."home");
		}
	}
?>