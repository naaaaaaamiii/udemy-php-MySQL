<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sample20</title>
</head>
<body>
<?php if (!empty($_REQUEST['my_name'])): ?>
    <p>お名前: <?php echo htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES); ?></p>
<?php endif; ?>
</body>
</html>