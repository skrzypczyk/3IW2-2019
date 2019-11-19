<?php


function myAutoload($class){
	if("core/".$class.".class.php"){
		include "core/".$class.".class.php";
	}
}

spl_autoload_register("myAutoload");


$uri = $_SERVER["REQUEST_URI"];


$listOfRoutes = yaml_parse_file("routes.yml");

if( !empty($listOfRoutes[$uri]) ){

	$c = $listOfRoutes[$uri]["controller"]."Controller";
	$a = $listOfRoutes[$uri]["action"]."Action";

	//Est ce que dans le dossier controller il y a une class
	//qui correspond à $c
	if( file_exists("controllers/".$c.".class.php") ){

		include "controllers/".$c.".class.php";
		if( class_exists($c)){

			$controller = new $c();
			if( method_exists($controller, $a)){

				$controller->$a();
				
			}else{
				die("L'action' n'existe pas");
			}


		}else{

			die("Le class controller n'existe pas");
		}

	}else{
		die("Le fichier du controller n'existe pas : controllers/".$c.".class.php");
	}



}else{

	die("L'url n'existe pas : Erreur 404");
}



