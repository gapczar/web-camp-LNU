<?php
	Class Database extends PDO(){
		public function __construct(){
			private $host	=	'localhost';
			private $dbname	=	'poll';
			private	$dbuser	=	'';
			private	$dbpass	=	'';
			private $dsn	=	"mysql:host=$this->host; dbname=$this->dbname";
			parent::__construct($dsn,$this->dbname,$this->dbpass);
			try{
				$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}Catch(PDOException $e){
				echo $e->errorMessage();
			}
		}
	}
?>