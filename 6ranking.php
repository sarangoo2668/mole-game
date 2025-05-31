<?php
  $file = file("6.txt");
  foreach($file as $f){
    list($date, $name, $score) = explode(',', rtrim($f));
    $db[$date.','.$name] = $score;
  }
  asort($db); //タイムが短い順にソートする 
  foreach($db as $key => $val){
   echo "$key,$val\n";
  }
?>