<?php
    session_start();
    require_once('config.php');
    $game = $_SESSION['game'];
    $idol = $_SESSION['idol'];
    if ($game != 0) {
        $_SESSION['game'] = 0;
    } else {
        $_SESSION['game'] = 1;
    }
    $qno = $_SESSION['questionno'];
    if($qno >= 50) {
        print('<script>location.href = "result.php";</script>');
    } else {
        $_SESSION['questionno'] = $_SESSION['questionno'] + 1;
        print('<script>location.href = "question.php";</script>');
    }
?>