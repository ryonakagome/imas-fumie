<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8" />

        <meta name="author" content="Naayo" />
        <meta name="description" content="デレステとミリシタのキャラを知ってるかどうか答えてどっちのプロデューサーか判定するクソサイト" />
        <title>アイマス踏み絵</title>

        <meta property="og:site_name" content="アイマス踏み絵" />
        <meta property="og:title" content="トップページ" />
        <meta property="og:description" content="デレステとミリシタのキャラを知ってるかどうか答えてどっちのプロデューサーか判定するクソサイト" />
        <meta property="og:type" content="website" />
        <?php
            $game = rand(0, 1);
            //0 = デレステ, 1 = ミリシタ
            if ($game == 0) {
                $idol = rand(1, 188);
                print('<link rel="shortcut icon" href="idols-deremas/'.$idol.'.png">');
            } else {
                $idol = rand(1, 53);
                print('<link rel="shortcut icon" href="idols-mirisita/'.$idol.'.png">');
            }
        ?>
    </head>
    <body>
<?php
    session_start();
    require_once('config.php');
    if (isset($_SESSION['questionno']) == '') {
        $_SESSION['questionno'] = 1;
        $_SESSION['game'] = 0;
        $_SESSION['deremas'] = 0;
        $_SESSION['mirisita'] = 0;
    } else {

    }
    $game = $_SESSION['game'];
    if ($game != 1) {
        $idol = rand(1, 188);
        $_SESSION['idol'] = $idol;
        $sql = mysqli_query($db_link, "SELECT idolid, idolname FROM idols_deremas WHERE idolid = '$idol'");
        $result = mysqli_fetch_assoc($sql);

        print('<h4>第'.$_SESSION['questionno'].'問');
        print('<center>');
        print('<img src="idols-deremas/'.$idol.'.png">');
        print('<h3>'.$result['idolname'].'を知っていますか<br>');
        print('<a href="know.php">知ってる</a>&nbsp;<a href="dontknow.php">知らない</a>');
    } elseif ($game != 0) {
        $idol = rand(1, 53);
        $_SESSION['idol'] = $idol;
        $sql = mysqli_query($db_link, "SELECT idolid, idolname FROM idols_mirisita WHERE idolid = '$idol'");
        $result = mysqli_fetch_assoc($sql);

        print('<h4>第'.$_SESSION['questionno'].'問');
        print('<center>');
        print('<img src="idols-mirisita/'.$idol.'.png">');
        print('<h3>'.$result['idolname'].'を知っていますか<br>');
        print('<a href="know.php">知ってる</a>&nbsp;<a href="dontknow.php">知らない</a>');
    }
    ?>
    </body>
</html>