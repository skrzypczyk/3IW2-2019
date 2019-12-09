<?php
class View{

	private $view;
	private $template;
	private $data = [];


	public function __construct($view, $template="back"){
		$this->setTemplate($template);
		$this->setView($view);
	}


	public function setTemplate($template){
		$this->template = strtolower(trim($template));

		if( !file_exists("views/templates/".$this->template.".tpl.php")){
			die("Le template n'existe pas");
		}

	}

	public function setView($view){
		$this->view = strtolower(trim($view));

		if( !file_exists("views/".$this->view.".view.php")){
			die("La vue n'existe pas");
		}
	}


	public function assign($key, $value){
		$this->data[$key] = $value;
	}

	public function addModal($modal, $data){

		if( !file_exists("views/modals/".$modal.".mod.php")){
			die("Le modal ".$modal." n'existe pas");
		}

		include "views/modals/".$modal.".mod.php";

	}


	public function __destruct(){
		// $this->data = ["name"=>"yves"];
		//$name = "yves"
		extract($this->data);
		include "views/templates/".$this->template.".tpl.php";
	}


}









