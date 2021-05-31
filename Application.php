<?php
	
	define('INCLUDE_PATH_FULL','../mvc/Views/pages/');

	class Application
	{
		
		function __construct()
		{
			
		}


		public function executar(){

			$url = isset($_GET['url']) ? explode('/', $_GET['url'])[0] : 'home';  
			$url = ucfirst($url);
			$url.= "Controller";
			if(file_exists('Controllers/'.$url.'.php')){
				$className = 'Controllers\\'.$url;
				echo 'Estou carregando a classe: '.$url;
				$Controller = new $className;
				$Controller->executar();
			}else{
				
				$className = 'Controllers\NotFoundController';
				$Controller = new $className;
				$Controller->executar();
			}
		}
	}