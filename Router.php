<?php

	class Router
	{
		
		function __construct()
		{
			
		}
		private $routers = ["contato"=>"contato", "contato/sucesso"=>"contato__sucesso"];

		public static function getRouter($path = null){

			$routers = [ "" => "home", "contato"=>"contato", "contato/sucesso"=>"contato__sucesso", "home"=>"home", "sobre" => "sobre"];

			foreach ($routers as $key => $value) {	
				if(strtolower($path) == strtolower($key)){
					return $value;
				}
			}
			return 'notFound';
		}

		public static function rota($path, $arg){
			
			$url = @$_GET['url'];
			if($url == $path){
				$arg();
				die();
			}

			$path = explode('/', $path);
			$url = explode('/', @$_GET['url']);
			$ok = true;
			$par = [];

			if(count($path) == count($url)){
				foreach ($path as $key => $value) {
					if($value == '?'){
						$par[$key] = $url[$key];
					}else if($url[$key] != 'value'){
						$ok = false;
						break;
					}
				}
				if($ok){
					$arg($par);
					die();
				}
			}
		}
	}