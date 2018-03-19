<?php
    $db_host = 'db.rintech.tokyo';
    $db_user = 'imasfumie';
    $db_pass = 'shibuyarin0810';
    $db_name = 'imasfumie';

    $db_link = new mysqli($db_host, $db_user, $db_pass, $db_name);
    mysqli_set_charset($db_link, "utf8");
?>