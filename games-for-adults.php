<?php
    require_once  "db_connect.php";
    require_once "header.php";
    require_once "print-words.php";
    $games = mysqli_fetch_all(mysqli_query($connect,  "SELECT * FROM `games`, `games_for_adults` WHERE `games`.`id` = `games_for_adults`.`id`"));
    PrintGames($games);
