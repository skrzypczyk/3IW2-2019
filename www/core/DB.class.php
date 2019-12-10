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
		$this->table = get_called_class();

	}


	public function save(){

		$sql = "INSERT INTO ".$this->table." (firstname, lastname, email, pwd, status) VALUES ("Yves", "SKRZYPCZYK", "y.skrzypczyk@gmail.com", "Test1234", 0);"

		echo $sql;

	}
}



