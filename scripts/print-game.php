<?php
function PrintGames($games) {
    foreach ($games as $game) { ?>
        <form class="card-body" method="get">
            <h3 class=""><?=$game[1]?></h3>
            <img style="height: 300px" src="<?=$game[2]?>">
            <p>Игра длится:  <?=$game[4]?> мин.</p>
            <p>Цена: <?=$game[7]?> руб.</p>
            <?php
            if ($game[6] != null) { ?>
                <p>Количество игроков: от <?=$game[5]?> до <?=$game[6]?></p>
                <?php
            }
            else { ?>
                <p>Количество игроков: от <?=$game[5]?></p>
                <?php
            }
            ?>
            <a class="btn btn-dark" role="button" href=../pages/game.php?game=<?=$game[0]?>>Подробнее</a>
        </form>
    <?php }
}