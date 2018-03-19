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
        <center>
            <h2>アイマス踏み絵</h2>
            <p>このサイトは、デレステとミリシタのキャラを知ってるかどうか答えて、あなたはどっちのPさんなのかを判定するサイトです。</p>
            <a href="question.php">問題へ進む</a>
            <hr />
            <h4>注意</h4>
            <p>このサイトはプログラミングのお勉強のために作ったクソサイトです。営利目的ではありません。</p>
        </center>
    </body>
</html>