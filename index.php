<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body class="container mt-4">
<?php
    require_once  "db_connect.php";
    require_once "header.php";
    $words = mysqli_fetch_all(mysqli_query($connect,  "SELECT * FROM `boardgames`"));
    foreach ($words as $word) { ?>
        <form class="card-body" method="get">
            <h3 class=""><?=$word[1]?></h3>
            <img class="img-fluid " src="<?=$word[2]?>">
            <p><?=$word[3]?></p>
            <p>Игра длится:  <?=$word[4]?> мин.</p>
            <p>Цена: <?=$word[6]?> руб.</p>
            <p>Количество игроков: <?=$word[5]?></p>
            <a class="btn btn-dark" role="button" href="game.php?game=<?=$word[0]?>">Подробнее</a>
        </form>

    <?php }
?>
</body>
</html>