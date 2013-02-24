<?php

class Home_controller extends Super
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data = array(
			'content'=>'frontend'
		);

		$this->view("temp/content", $data);
	}
	public function profile()
	{
		$data = array(
			'content'	=>	'user/home_user'
		);
		$this->view("temp/content", $data);
	}
}