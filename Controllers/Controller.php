<?php

namespace Controllers;

class Controller
{
	
	private $view;
	private $model;
	private $page;

		function __construct(){
			$this->page = \Router::getRouter(@$_GET['url']);
		}

		public function executar(){
			return $this->page = \Router::getRouter(@$_GET['url']);
		}

}