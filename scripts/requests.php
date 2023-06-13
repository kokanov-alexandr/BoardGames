<?php

    function getAllGames($connect): array {
        return mysqli_fetch_all(mysqli_query($connect,  "SELECT * FROM `games`"));
    }

    function getGamesForTwo($connect): array {
        return mysqli_fetch_all(mysqli_query($connect,  "select * from games 
            join `games_categories` `gc` on `games`.`id` = `gc`.`game_id` 
            join `categories` `c` on `gc`.`category_id` = `c`.`id` and `c`.`name` = 'Игры для двоих';"));
    }

    function getGamesForTheCompany($connect): array {
        return  mysqli_fetch_all(mysqli_query($connect,  "select * from games 
            join `games_categories` `gc` on `games`.`id` = `gc`.`game_id` 
            join `categories` `c` on `gc`.`category_id` = `c`.`id` and `c`.`name` = 'Игры для компании';"));
    }

    function getGamesForAdults($connect): array {
        return mysqli_fetch_all(mysqli_query($connect,  "select * from games 
            join `games_categories` `gc` on `games`.`id` = `gc`.`game_id` 
            join `categories` `c` on `gc`.`category_id` = `c`.`id` and `c`.`name` = 'Игры для взрослых';"));
    }

    function getGamesForChildren($connect): array {
        return mysqli_fetch_all(mysqli_query($connect,  "select * from games 
            join `games_categories` `gc` on `games`.`id` = `gc`.`game_id` 
            join `categories` `c` on `gc`.`category_id` = `c`.`id` and `c`.`name` = 'Игры для детей';"));

    }

