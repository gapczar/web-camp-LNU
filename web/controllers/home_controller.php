<?php

class Home_controller extends Super
{
	private $is_login;
	public function __construct()
	{
		parent::__construct();
		session_start();
		if(!array_key_exists('is_login', $_SESSION) && $_SESSION['is_login'] == false){
			$this->is_login = false;
		} else {
			$this->is_login = true;
		}
	}
	public function index()
	{
		$this->login();
	}
	public function applist()
	{
			$data = array(
				'content'=>'home/applist'
			);

			$this->view("temp/content", $data);
	}
	public function app_list()
	{
		$data = array(
			'content'=>'user/user_applist'
		);

		$this->view("temp/content", $data);

	}
	public function top5()
	{
		$data = array(
			'content'=>'user/user_top5'
		);

		$this->view("temp/content", $data);

	}
	public function profile()
	{
		if($this->is_login == true)
		{
			$data = array(
				'content'	=>	'user/home_user'
			);
			$this->view("temp/content", $data);
		} else {
			header("location:".base_url."home/login");
		}
	}
	public function register()
	{
		$data = array(
			'content'	=>	'home/register'
		);
		$this->view('temp/content', $data);
	}
	public function login()
	{
		$data = array(
			'content'	=>	'home/login'
		);


		$this->view('temp/content', $data);
	}
}