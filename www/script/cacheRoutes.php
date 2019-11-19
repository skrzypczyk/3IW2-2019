<?php
//Récupérer le fichier yaml
$listOfRoutes = yaml_parse_file("../routes.yml");
//Créer un fichier php dans le dossier cache
//Contenant toutes les routes sous forme d'array
//Le fichier devra s'appeler "routes.cache.php"

$data = var_export($listOfRoutes, true);

file_put_contents("../cache/routes.cache.php", "<?php ".$data);