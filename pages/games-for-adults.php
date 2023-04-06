<?php
    require_once "../settings/db_connect.php";
    require_once "../components/header.php";
    require_once "../scripts/print-game.php";
    $games = mysqli_fetch_all(mysqli_query($connect,  "SELECT * FROM `all_games`, `games_for_adults` WHERE `all_games`.`id` = `games_for_adults`.`id`"));
    PrintGames($games);
