<?php
	$this->view("temp/header", $data);
	$this->view($content, $data);
	$this->view("temp/footer", $data);
?>