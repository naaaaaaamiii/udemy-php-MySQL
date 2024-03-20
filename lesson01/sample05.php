<?php
$today = new DateTime();
//$は変数
//オブジェクトを作る
$today->setTimezone(new DateTimeZone('Asia/Tokyo'));
//矢印みたいなやつでつなげてメソットを記入する
echo '現在は、'.$today->format('G時 i分 s秒').'です';