<?php
		
		namespace Controllers;
		
		class HomeController extends Controller
		{
			
			function __construct()
			{
				parent::__construct();
				$this->page = parent::executar();
			}

			public function executar(){			
				print_r($this->page);
				
				\Router::rota(@$_GET['url'], function(){
				$this->view = new \Views\MainView($this->page);
				$this->view->render(array('titulo'=>'Contato'));
				});
			}

		}
		