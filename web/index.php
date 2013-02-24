<?php 

	error_reporting(E_ALL);

	$globals = 'globals';
	$controllers = 'controllers';
	$models = 'models';
	$views = 'views';

	$paths = array($globals, $controllers, $models, $views);

	foreach($paths as $path)
	{
		if(realpath($path)!=false)
		{
			$$path = realpath($path)."/";
		}

	}

	$base_url = current(explode("/", strtolower($_SERVER['SERVER_PROTOCOL'])));
	$base_url.= "://" . $_SERVER['SERVER_NAME'];
	$base_url.= current(explode("/index.php", $_SERVER['SCRIPT_NAME']))."/";

	define("GLOBALS", str_replace("\\","/", $globals));
	define("CONTROLLERS", str_replace("\\","/", $controllers));
	define("MODELS", str_replace("\\","/", $models));
	define("VIEWS", str_replace("\\","/", $views));
	define('base_url', $base_url);

	echo $base_url;

	require_once(GLOBALS."Super.class.php");
	require_once(GLOBALS."URI.class.php");

?>