<?php 
class DB{

	private $table;

	//SINGLETON
	public function __construct(){

		try{

			$pdo = new PDO(DRIVER_DB.":host=".HOST_DB.";dbname=".NAME_DB , USER_DB , PWD_DB);

		}catch(Exception $e){
			die("Erreur SQL : ".$e->getMessage());
		}

		//A completer
		//$this->table = ????;

	}


	public function save(){


	}
}