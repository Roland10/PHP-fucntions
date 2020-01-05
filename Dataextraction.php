<<?php

//a fucntion that extracts keys and their values from a textfile
fucntion dataExtractor()

//given an array
$txt = array();

foreach ($txt as $key => $value) {
  if($key == "" || $key == "" || $key == ""){
    extract($txt);
    echo $key.":".$value."\n";
  }

}

 ?>
