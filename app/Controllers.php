<?php

	class Controller {
		public $load;
		public $model;

		function __construct()
		{
			$this->load = new Load();
			$this->model = new Model();
			//decir  la pagina donde estamos
			$this->home();
		}

		function home()
		{
			$data = $this->model -> user_info();
			$this->load->view('someview.php',$data);
		}
	}