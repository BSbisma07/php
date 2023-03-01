<?php
 $before= 0;
 $after= 1;
 echo"$before $after";

 for($a = 0; $a<20; $a++){

    $has= $before + $after;
    echo "$has ";

    $before = $after;
    $after = $has;
 }
?>