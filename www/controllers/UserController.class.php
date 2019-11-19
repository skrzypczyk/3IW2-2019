<?php
class UserController{

	public function defaultAction(){
		echo "Action default dans le controller user";
	}

	public function addAction(){
		echo "Action add dans le controller user";	
	}
	

	public function loginAction(){
		$myView = new View("login", "account");
	}
	public function registerAction(){
		$myView = new View("register", "account");	
	}
	public function forgotPwdAction(){
		$myView = new View("forgotPwd", "account");	
	}

}