<?php

session_start();

header("Content-type: image/png");



$image = imagecreate(400, 100);

$back = imagecolorallocate($image, rand(150,250),rand(150,250),rand(150,250));


$charAuthorized = "abcdefghijklmnopqrstuvwxyz0123456789";
$charAuthorized = str_shuffle($charAuthorized);
$lengthCaptcha = rand(5,7);
$captcha = substr($charAuthorized, 0, $lengthCaptcha);

$_SESSION["captcha"] = $captcha;

$listOfFonts = glob("fonts/*.ttf");

$x = rand(20, 30);
for($i=0; $i<$lengthCaptcha; $i++) {

	$colors[] = imagecolorallocate($image, rand(0,100),rand(0,100),rand(0,100));
	
	imagettftext($image, rand(20,50), rand(-45, 45), $x, rand(60, 70), $colors[$i], $listOfFonts[array_rand($listOfFonts)], $captcha[$i]);

	$x += rand(50, 60);
}

$nbGeo = rand(4,10);
for($i=0; $i<$nbGeo; $i++) {

	$geo = rand(1,3);

	switch ($geo) {
		case 1:
			imageline($image, rand(0, 400), rand(0, 100), rand(0, 400), rand(0, 100), $colors[array_rand($colors)]);
			break;
		case 2:
			imagerectangle($image, rand(0, 400), rand(0, 100), rand(0, 400), rand(0, 100), $colors[array_rand($colors)]);
			break;
		default:
			imageellipse($image, rand(0, 400), rand(0, 100), rand(0, 400), rand(0, 100), $colors[array_rand($colors)]);
			break;
	}

}




//imagestring($image, 5, 100, 40, "toto", $white);

//Générer un texte aléatoire d'une longueur aléatoire entre 5 et 7 caractères
//Insérer ce texte dans l'image avec :
// -> Une police aléatoire par caractère provenant d'un dossier "fonts" avec des fichiers ttf
// -> Attention si je rajoute une police dans le dossier cela doit marcher automatiquement
// -> un angle aléatoire par caractère
// -> une couleur aléatoire par caractère
// -> une taille et une position aléatoire par caractère
// -> un fond aléatoire
// -> un nombre de forme géométrique aléatoire utilisant des couleurs des caractères

//ATTENTION LE CAPTCHA DOIT ETRE LISIBLE !!!


imagepng($image);

