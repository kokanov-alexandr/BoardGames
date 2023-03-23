<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    require_once  "db_connect.php";
    require_once "header.php";
    require_once "print-words.php";
    $games = mysqli_fetch_all(mysqli_query($connect,  "SELECT * FROM `games`"));
    PrintGames($games);
?>
</body>
</html>