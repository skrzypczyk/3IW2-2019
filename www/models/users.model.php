<?php
class users extends DB{

	private $id;
	private $firstname;
	private $lastname;	
	private $email;
	private $pwd;
	private $status;

	public function __construct(){

		parent::__construct();
	}

	public function setId($id){
		$this->id = $id;
	}
	public function setFirstname($firstname){
		$this->firstname = ucwords(strtolower(trim($firstname)));
	}
	public function setLastname($lastname){
		$this->lastname = strtoupper(trim($lastname));
	}
	public function setEmail($email){
		$this->email = strtolower(trim($email));
	}
	public function setPwd($pwd){
		$this->pwd = $pwd;
	}
	public function setStatus($status){
		$this->status = $status;
	}


}