<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sample21</title>
</head>
<body>
    <h2>ご予約日</h2>
    <?php if (!empty($_REQUEST['reserve'])) : ?>
        <?php $reserves = $_REQUEST['reserve']; ?>
        <ul>
            <?php foreach ($reserves as $reserve): ?>
                 <li><?php echo htmlspecialchars($reserve,ENT_QUOTES); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
    <P>ご予約はありません</P>
    <?php endif; ?>
</body>
</html>