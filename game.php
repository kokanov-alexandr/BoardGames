<div class="container">
    <?php
    require_once  "db_connect.php";
    require_once "header.php";

    $game_name = $_GET["game"];
    $game  = mysqli_fetch_all(mysqli_query($connect,  "SELECT * FROM `games` WHERE `games`.`id` = $game_name"))[0];
    ?>
    <h3 class=""><?=$game[1]?></h3>
    <img style="height: 300px" src="<?=$game[2]?>">
    <p><?=$game[3]?></p>
    <?php
        if ($game[6] != null) { ?>
            <p>Количество игроков: от <?=$game[5]?> до <?=$game[6]?></p>
        <?php
        }
        else { ?>
            <p>Количество игроков: от <?=$game[5]?></p>
        <?php
        }
    ?>
    <p>Игра длится: <?=$game[4]?> мин.</p>
    <p>Цена: <?=$game[7]?> руб.</p>
    <p><?=$game[8]?>+</p>
    <a class="btn btn-dark" role="button" href="index.php">Главная</a>
</div>


