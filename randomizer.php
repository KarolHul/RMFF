<?php
$json=file_get_contents("config_file.json");
 $decode = json_decode($json,true);

 function random($var,$type){
     global $decode;
     $a = $decode["$type"];
    $var = scandir($a);
    unset($var[0]);
    unset($var[1]);
    $var = array_values($var);
    $rand = array_rand($var);
    return "$a/$var[$rand]";
}
$P = random("pic","Pictures");
$V = random("vid","Videos");
$G = random("gif","Gifs");
?>