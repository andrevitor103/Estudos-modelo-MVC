<?php
		
		namespace Controllers;
		
		class SobreController extends Controller
		{
			
			function __construct()
			{
				// $this->view = new \Views\MainView('sobre');
				parent::__construct();
				$this->page = parent::executar();
			}

			public function executar(){

				\Router::rota(@$_GET['url'], function(){
				$this->view = new \Views\MainView($this->page);
				$this->view->render(array('titulo'=>'Contato'));
				});
				
				$this->view->render(array('titulo'=>'Sobre'));			}

		}