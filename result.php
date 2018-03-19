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
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </head>
    <body>
<?php
    session_start();
    if (isset($_SESSION['deremas']) > isset($_SESSION['mirisita'])) {
        print("<center><h2>判定</h2>");
        print("<h3>あなたはデレステPですね？</h3>");
        print('<a href="https://twitter.com/share" class="twitter-share-button" data-text="私はデレステPと判定されました。">Tweet</a>');
    } elseif (isset($_SESSION['deremas']) < isset($_SESSION['mirisita'])) {
        print("<center><h2>判定</h2>");
        print("<h3>あなたはミリシタPですね？</h3>");
        print('<a href="https://twitter.com/share" class="twitter-share-button" data-text="私はミリシタPと判定されました。">Tweet</a>');
    } else {
        print("<center><h2>判定</h2>");
        print("<h3>あなたは中間層ですね？</h3>");
        print('<a href="https://twitter.com/share" class="twitter-share-button" data-text="私は中間層と判定されました。">Tweet</a>');
    }
    session_destroy();
?>
<a href="index.php">トップに戻る</a>
</body>
</html>