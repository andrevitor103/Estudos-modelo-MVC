<?php
	
	namespace Views;

	class MainView 
	{
		private $fileName;
		private $header;
		private $footer;

		const titulo = "Teste";

		function fileExists($filePath){

			if(is_file($filePath) && file_exists($filePath)){
				return 'true';
			}else{
				return 'false';
			}
		}

		function __construct($filename = null, $header = 'header', $footer = 'footer')
		{
			$this->fileName = $filename;
			$this->header = $header;
			$this->footer = $footer;

		}

		public function render($arr = []){
			$error = false;
			
			$this->fileExists('../mvc/Views/pages/templates/'.$this->header.'.php') == 'true' ? include('pages/templates/'.$this->header.'.php') : '';
			$this->fileExists('../mvc/Views/pages/'.$this->fileName.'.php') == 'true' ? include('pages/'.$this->fileName.'.php') : $error = true;
			$this->fileExists('../mvc/Views/pages/templates/'.$this->footer.'.php') == 'true' ? include('pages/templates/'.$this->footer.'.php') : '';

			if($error){
				header('Location: ../index.php');
				die();
			}
		}
	}