<?php

$arguments = $argv;

array_shift($arguments);


$requete = array();

foreach ($arguments as $argument)
sort($arguments);

array_push($requete, $argument);



$json = json_encode($arguments);
file_put_contents("myfile.json", $json); 

echo $json;