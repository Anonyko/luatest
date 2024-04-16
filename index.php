<?php
$token = $_GET["token"];

if($token == "abc"){
    $file = fopen("asdada.txt","r");
    while(! feof($file))
  {
  echo fgets($file). "<br />";
  }

fclose($file);
} elseif($token != "abc"){
    $token = "asada";
    echo "abc";
    };
?> 
