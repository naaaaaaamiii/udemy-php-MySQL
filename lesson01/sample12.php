<?php
date_default_timezone_set('Asia/Tokyo');
$time = ('G');
?>

<?php if($time < 9): ?>
    <p>営業時間外です</p>
<?php else: ?>
    <p>ようこそ</p>
<?php endif; ?>

<?php
$s = '';
if ($s):
    echo "$s には文字が入っています";
endif;

$x = 13;
if ($x):
    echo '$xは0ではありません';
endif;

$x = 0;
if ($x === 0):
    echo '$Xは0です';
endif;

?>