<?php
class ConstLoader{

	private $extend;
	private $text;

	public function __construct($extend = "dev"){

		$this->extend = $extend;
		$this->checkFiles();
		$this->getFilesEnv();
		$this->load();


	}

	public function checkFiles(){
		if(!file_exists(".env")){
			die("Le fichier env n'existe pas");
		}else if (!file_exists(".".$this->extend)){
			die("Le fichier ".$this->extend." n'existe pas");
		}
	}

	public function getFilesEnv(){
		//.dev ou .prod
		$this->text = trim(file_get_contents(".".$this->extend));

		//.env
		$this->text .= "\n".trim(file_get_contents(".env"));
		

	}

	public function load(){
		$lines = explode("\n", $this->text);
		foreach ($lines as $line) {
			$data = explode("=", $line);
			if( !defined($data[0]) && isset($data[1]) ){
				define($data[0], $data[1]);
			}
		}

	}


}