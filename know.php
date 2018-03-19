<?php
    session_start();
    require_once('config.php');
    $game = $_SESSION['game'];
    $idol = $_SESSION['idol'];
    if ($game = 0) {
        $sql = mysqli_query($db_link, "UPDATE 'idols_deremas' SET 'knows' = knows + 1 WHERE idolid = '$idol'");
        $_SESSION['deremas'] = $_SESSION['deremas'] + 1;
    } else {
        $sql = mysqli_query($db_link, "UPDATE 'idols_mirisita' SET 'knows' = knows + 1 WHERE idolid = '$idol'");
        $_SESSION['mirisita'] = $_SESSION['mirisita'] + 1;
    }
    $_SESSION['game'] = rand(0, 1);
    $qno = $_SESSION['questionno'];
    if($qno = 50) {
        print('<script>location.href = "result.php";</script>');
    } else {
        $_SESSION['questionno'] = $_SESSION['questionno'] + 1;
        print('<script>location.href = "question.php";</script>');
    }
?>