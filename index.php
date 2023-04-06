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
        $games = mysqli_fetch_all(mysqli_query($connect,  "SELECT * FROM `all_games`"));
        $game_for_page = [];
        $n = 2;
        for ($i = $n * ($page_number - 1); $i < $n * $page_number; $i++) {
            $game_for_page[] = $games[$i];
        }
        PrintGames($game_for_page);
    ?>
    <form action="scripts/increase_page.php" method="post">
        <button class="btn btn-outline-dark">Следующая страница</button>
    </form>
</body>
</html>