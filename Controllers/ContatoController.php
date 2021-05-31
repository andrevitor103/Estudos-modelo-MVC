<?php

	namespace Controllers;

	class ContatoController extends Controller
	{
		

		function __construct()
		{
			parent::__construct();
			$this->page = parent::executar();
		}

		public function executar(){		
			// echo $this->page;
			if(isset($_POST['acao'])){
				\Models\ContatoModel::enviarFormulario();
				echo '<script>location.href="contato/sucesso"</script>';
				die();
			}

			\Router::rota($_GET['url'], function(){
				$this->view = new \Views\MainView($this->page);
				$this->view->render(array('titulo'=>'Contato'));
			});
		}
	}

