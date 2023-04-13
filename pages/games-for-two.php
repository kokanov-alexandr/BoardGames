<?php
    require_once "../settings/db_connect.php";
    require_once "../components/header.php";
    require_once "../scripts/print-game.php";


    $games = mysqli_fetch_all(mysqli_query($connect,  "select * from games 
    join `games_categories` `gc` on `games`.`id` = `gc`.`game_id` 
    join `categories` `c` on `gc`.`category_id` = `c`.`id` and `c`.`name` = 'Игры для двоих';"));
    PrintGames($games);
