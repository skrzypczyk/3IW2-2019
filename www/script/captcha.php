<?php

header("Content-type: image/png");

$image = imagecreate(400, 100);

$black = imagecolorallocate($image, 0, 0, 0);
$white = imagecolorallocate($image, 255, 255, 255);

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

