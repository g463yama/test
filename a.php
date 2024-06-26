#!/usr/bin/php
<?php 
  foreach(file('/usr/share/dict/words') as $line){
    if (strpos($line, 'xy') !== false) {//"xy"が含まれる行を示す。ないときはfalseを返す。
      echo $line;
    }
  } 
?>
