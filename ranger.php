<?php
// @formatter:on
// Je récupère les données dans les arguments
$arguments = $argv;
// je retire le premeire element de mon tbaleau
array_shift($arguments);


// Je crée un tableau
$requete = array();
// Je boucle sur le tableau
foreach ($arguments as $argument)
sort($arguments);

// Je push mes données dans mon tableau

array_push($requete, $argument);


// jenvoi les infos à mon json
$json = json_encode($arguments);
$bytes = file_put_contents("myfile.json", $json); 