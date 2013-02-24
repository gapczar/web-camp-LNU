<?php
	Class User_controller extends Super{
		function __construct(){
			parent::__construct();
		}
		function index(){
			$data = array(
					"content" => "user/home_user"
				);
			$this->view("template/body", $data);
		}
		function app_list(){
			$data = array(
					"content"=>"user/user_applist"
				);
		}
		function user_top(){
			$data = array(
					"content"=>"user/user_top5"
				);
		}
	}
?>