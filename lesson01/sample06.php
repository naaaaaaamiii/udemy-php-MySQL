<?php
$sum = 100+1050+200;
echo $sum;
?>
<p>合計金額は、<?php echo $sum; ?>円です</p>
<p>税込み金額は、<?php echo $sum*1.1; ?>円です</p>

<!--phpの返しタグがないところはhtmlとして読み込まれている-->
