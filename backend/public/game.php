<?php
        require_once ('./Controllers/GameController.php');

        $game = new GameController();
        $game->start();
        var_dump($game->getCardMap());
?>

<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>JIN OJT Black Jack</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link rel="stylesheet" href="./css/common.css">
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <script src=""></script>
    </head>
 
    <body>
        <div class="container">

            <div class="sp">
                <h1 class="title">Black Jack</h1>
            </div>
            <form action="./game.php" method="post">
                <div class="sp">
                    <lable>Player Name：</lable>
                    <input type="text" name="player" class="sp">
                </div>
                <div class="sp">
                    <button type="submit" class="btn">Play</button>
                </div>
            </form>
        </div>
    </body>
</html>