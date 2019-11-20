<?php
class DefaultController{

	public function defaultAction(){


		//Depuis la base de données récupéré le prénom
		$name = "Yves";

		$myView = new View("dashboard");
		$myView->assign("name", $name);

	}

}