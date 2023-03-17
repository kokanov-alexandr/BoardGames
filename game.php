<div class="container">
    <?php
    require_once  "db_connect.php";
    require_once "header.php";

    $game_name = $_GET["game"];
    $game  = mysqli_fetch_all(mysqli_query($connect,  "SELECT * FROM `boardgames` WHERE`boardgames`.`id` = $game_name"))[0];
    ?>
    <h3 class=""><?=$game[1]?></h3>
    <img class="img-fluid " src="<?=$game[2]?>">
    <p><?=$game[3]?></p>
    <p>Количество игроков: <?=$game[5]?></p>
    <p>Игра длится:  <?=$game[4]?> мин.</p>
    <p>Цена: <?=$game[6]?> руб.</p>
    <a class="btn btn-dark" role="button" href="index.php">Главная</a>
</div>


