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
						$_SESSION['id']	=	$key['id'];
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
			unset($_SESSION['id']);
			unset($_SESSION['username']);
			unset($_SESSION['session_id']);
			session_destroy();
			header("location:".base_url."home");
		}
		public function voteItem()
		{
			$app = $_POST['app_id'];
			$q1 = $this->db->prepare("SELECT * FROM tbl_rate WHERE user_id=:user AND app_id=:app");
			$q1->bindParam(":user", $_SESSION['id'], PDO::PARAM_INT);
			$q1->bindParam(":app", $app, PDO::PARAM_INT);
			$q1->execute();

			$q2 = $this->db->prepare("SELECT * FROM tbl_rate WHERE user_id=:user");
			$q2->bindParam(":user", $_SESSION['id'], PDO::PARAM_INT);
			$q2->execute();
			

			if($q2->rowCount() >=5){
				echo "You have reached the maximum limit of votes!";
			}else{
				if($q1->rowCount()==0){
					$q = $this->db->prepare("INSERT INTO tbl_rate(user_id, app_id) VALUES(:user, :app)");
					$q->bindParam(":user", $_SESSION['id'], PDO::PARAM_INT);
					$q->bindParam(":app", $app, PDO::PARAM_INT);
					$q->execute();
				echo "1";
				}else{
					echo "You have already voted for this one";
				}
			}


		}
	}
?>