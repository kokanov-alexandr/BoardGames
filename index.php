<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        require_once  "settings/db_connect.php";
        require_once "components/header.php";
        require_once "scripts/print-game.php";
        $page_number = 1;
        if (isset($_GET['page'])) {
            $page_number = $_GET['page'];
        }
        $games = mysqli_fetch_all(mysqli_query($connect,  "SELECT * FROM `games`"));
        PrintGames($games);
    ?>
</body>
</html>