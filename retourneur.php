<?php

function retourneMonMot($mot){
$list = [];
$mot = explode(" ",$mot);

foreach($mot as $value){
$value = strrev($value);
array_push($list, $value);
  }
  $mot = implode(" ", $list);
  echo $mot;
}