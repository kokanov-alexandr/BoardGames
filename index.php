<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        require_once  "settings/db_connect.php";
        require_once  "scripts/requests.php";
        require_once "components/header.php";
        require_once "scripts/print-game.php";


        $games = getAllGames($connect);
        PrintGames($games);
    ?>
</body>
</html>