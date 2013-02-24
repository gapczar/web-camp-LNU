<?php
	class Super
	{
		private $model_suffix = "_model";
		private $data;

		public function __construct()
		{
			require_once(GLOBALS.'Database.class.php');
			require_once(GLOBALS.'Security.class.php');
			require_once(GLOBALS.'File_manager.class.php');
			$this->db = new Database;
			$this->sec = new Security;
			$this->file = new File_manager;
		}
		public function model($model_file = null)
		{
			if($model_file != null)
			{
				require_once(MODELS.$model_file.$this->model_suffix.'.php');
				$mymodel = ucfirst($model_file).$thide->model_suffix;
				$model_instance = new $mymodel;
				return $model_instance;

			}
		}
		public function view($view_file = null, $data = null)
		{
			if($data != null){
				$this->data = $data;
				$data_obj = gey_object_vars($this);
				$data_ = $data_obj['data'];
				foreach($data_ as $obj_vars=>$obj_val1)
				{
					if(is_string($obj_vars))
					{
						$$obj_vars = $obj_val1;
					}
					if(is_array($obj_vars))
					{
						foreach($obj_vars as $obj_vars=>$obj_val2)
						{
							$$obj_vars = $obj_val2;
						}
					}
				}
			}
			if($view_file != null)
			{
				if(is_array($view_file))
				{
					foreach($view_file as $view_path)
					{
						require_once(VIEWS.$view_path.'.php');
					}
				}
				if(is_string($view_file))
				{
					require_once(VIEWS.$view_file.'.php');
				}
			}
		}
	}