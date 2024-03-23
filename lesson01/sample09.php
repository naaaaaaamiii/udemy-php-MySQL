<?php

for($i=0; $i<366; $i++):
    $time = strtotime('+0 day');
    $day = date('n/j(D)' , $time);
    echo $day . '<br>';
endfor;
?>

<!--strtotime  String to time -->
