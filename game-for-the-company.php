<?php
    require_once  "db_connect.php";
    require_once "header.php";
    require_once "print-words.php";
    $games = mysqli_fetch_all(mysqli_query($connect,  "SELECT * FROM `games`, `game_for_the_company` WHERE `games`.`id` = `game_for_the_company`.`id`"));
    PrintGames($games);
