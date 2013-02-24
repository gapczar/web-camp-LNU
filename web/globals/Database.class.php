<?php
	Class Database extends PDO(){
		private $host	=	'localhost';
		private $dbname	=	'poll';
		private	$dbuser	=	'';
		private	$dbpass	=	'';
		public function __construct(){
			$this->$dsn	=	"mysql:host=".$this->host."; dbname=".$this->dbname."";
			parent::__construct($this->dsn,$this->dbname,$this->dbpass);
			try{
				$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}Catch(PDOException $e){
				echo $e->errorMessage();
			}
		}
	}
?>