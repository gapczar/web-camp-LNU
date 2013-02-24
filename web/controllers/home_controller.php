<?php

class Home_controller extends Super
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		echo "this is the index.";
	}
	public function profile()
	{
		echo "this is my profile.";
	}
}