<?php
$json=file_get_contents("config_file.json");
 $decode = json_decode($json,true);

 function random($type,$amount = "0"){
     global $decode;
     $a = $decode["$type"];
    $var = scandir($a);
    unset($var[0]);
    unset($var[1]);
    $var = array_values($var);
    shuffle($var);
    $aarray = array_slice($var,0,$amount);
    foreach($aarray as $value){
      $value = $a ."/". $value;
      array_shift($aarray);
      array_push($aarray,$value);
    }
    return $aarray;
}
function printer($array){
     foreach($array as $value){
         echo $value . "\n";
     }
}
?>