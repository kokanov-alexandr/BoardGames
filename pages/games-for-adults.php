<?php
    require_once "../settings/db_connect.php";
    require_once "../components/header.php";
    require_once "../scripts/print-game.php";
    require_once "../scripts/requests.php";

    $games = getGamesForAdults($connect);
    PrintGames($games);
