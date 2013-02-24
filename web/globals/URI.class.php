<?php
	class URI
	{
		private $class;
		private $class_suffix = '_controller';

		public function __construct()
		{
			if(array_key_exists("REQUEST_URI", $_SERVER)){
				$request = substr($_SERVER['REQUEST_URI'],1);
				if(strpos($request, "?"))
				{
					$qs = strpos($request, "?");
					$qs = substr($request,0,$qs);
					$request = rtrim($qs,"/");
				} else {
					$request = rtrim($request,"/");
				}
				$this->get_uri($request);
			}
		}
		public function get_uri($str = null)
		{
			if($str == null){
				$url = false;
			} else {
				$url = explode("/", $str);
			}
			if($url == false)
			{
				$def_con = "home";

				require_once(CONTROLLERS.$def_con.$this->class_suffix.'.php');
				$this->fetch_class($def_con);
				$this->fetch_method();
			} else {
				if(array_key_exists(0, $url))
				{
					require_once(CONTROLLERS.$url[0].$this->class_suffix.'.php');
					$this->fetch_class($url[0]);
					if(array_key_exists(1, $url))
					{
						$this->fetch_method($url[1]);
						if(array_key_exists(2, $url))
						{
							$this->fetch_param($url[1], $url[2]);
						}
					} else {
						$this->fetch_method();
					}
				}

			}
		}
		public function fetch_class($class_name = null)
		{
			$myclass = ucfirst($class_name).$this->class_suffix;
			if(class_exists($myclass))
			{
				$this->class = new $myclass;
			}
		}
		public function fetch_method($method_name = null)
		{
			if($method_name == null)
			{
				$this->class->index();
			} else {
				$this->class->$method_name();
			}
		}
		public function fetch_param($method_name = null, $param = null)
		{
			if($method_name != null && $param != null){
				$this->class->$method_name($param);
			}
		}
	}
	$URI = new URI;