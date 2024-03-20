<?php
date_default_timezone_set('Asia/Tokyo');
//これを記入することで現在の時刻を表示できる
echo date('G時 i分 s秒');
//時間を表示できる
echo '現在は、'.date('G時 i分 s秒');
//どっとを記入することで文字列連結ができる
//echoの場合はカンマでもでいけるらしい
echo 'です';

echo'現在は、'.date('G時 i分 s秒').'です';