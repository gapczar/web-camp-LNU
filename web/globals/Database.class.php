<?php
	Class Database extends PDO{

		public function __construct(){

			parent::__construct("mysql:host=localhost;dbname=poll","root","root");
			try{
			}Catch(PDOException $e){
				echo $e->errorMessage();
			}
		}
	}
?>