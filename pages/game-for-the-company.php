<?php
    require_once "../settings/db_connect.php";
    require_once "../components/header.php";
    require_once "../scripts/print-game.php";
    $games = mysqli_fetch_all(mysqli_query($connect,  "SELECT * FROM `all_games`, `game_for_the_company` WHERE `all_games`.`id` = `game_for_the_company`.`id`"));
    PrintGames($games);
