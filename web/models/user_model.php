<?php
	Class User_model extends Super{
		function __construct(){
			parent::__construct();
		}
		function add_rating(){
			$app = $_POST['app_id'];
			$q1 = $con->prepare("SELECT * FROM tbl_rate WHERE user_id=:user AND app_id=:app");
			$q1->bindParam(":user", $_SESSION['id'], PDO::PARAM_INT);
			$q1->bindParam(":app", $app, PDO::PARAM_INT);
			$q1->execute();

			$q2 = $con->prepare("SELECT * FROM tbl_rate WHERE user_id=:user");
			$q2->bindParam(":user", $_SESSION['id'], PDO::PARAM_INT);
			$q2->execute();
			

			if($q2->rowCount() >=5){
				echo "You have reached the maximum limit of votes!";
			}else{
				if($q1->rowCount()==0){
					$q = $con->prepare("INSERT INTO tbl_rate(user_id, app_id) VALUES(:user, :app)");
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