<?php
	
	
	namespace Controllers;

	class NotFoundController extends Controller
	{
		
		function __construct()
		{
			$this->view = new \views\mainView('NotFound');
		}

		public function executar(){
			$this->view->render();
		}
	}