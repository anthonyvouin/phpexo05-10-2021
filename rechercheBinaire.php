<?php

$json = file_get_contents("data.json");
$parsed_json = json_decode($json);
// var_dump($parsed_json[0]);



$val="";

function binarySearch($argv, $parsed_json)
{
    $min = 0;
    $max = 68;
    $milieu = ($min+$max)/2;
    $tableau = $parsed_json;
    $step = 0;

  

    while($argv != $parsed_json[$milieu]->{'name'} && $min<$max ){

        if($argv < $parsed_json[$milieu]->{'name'}){
            $max = $milieu - 1;
        }else{
            $min = $milieu +1 ;
        }
        $milieu = ($min + $max)/2;

    }

    if($argv == $parsed_json[$milieu]->{'name'}){
        var_dump($parsed_json[$milieu]->{'num'});
    }else{
        echo"Tu as perdu";
    }
   





    //var_dump($max);
  // var_dump($parsed_json[1] -> {'name'});
}

// $a = "a";
// $b = "b";
// if($a<$b){
//     echo 'true';
// }

binarySearch($argv, $parsed_json);
