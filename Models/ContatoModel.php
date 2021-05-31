<?php

	namespace Models;

	class ContatoModel
	{
		
		function __construct()
		{
			
		}

		public static function enviarFormulario(){
			echo '<script>alert("Formulário enviado")</script>';
		}
	}