<?php
$i = 1;
//echo $i . '<br>';
//ここのechoを消すことで1日目からwhile構文に入ることできる
while ($i < 366):
//繰り返し構文→while　（）でどこまで繰り返しを行うか条件を出しておく
    echo $i . '日<br>';
    $i = $i + 1;
endwhile;
?>