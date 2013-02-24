<?php
	$con = new PDO("mysql:host=localhost;dbname=poll", "root", "root");
	session_start();
	$_SESSION['id']=1;
?>