<?php

    session_start();

    if(!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 0;
    }

    echo "You have updated this page " . $_SESSION['counter']++ . " times.";
    echo "<br><a href=" . $_SERVER['PHP_SELF'] . ">Reload</a><br>";

    $name = "Yuri Sokyrko";
    $age = 25;
    $work = "web-developer";

    $_SESSION['user'] = array(
        'name' => $name,
        'age' => $age,
        'work' => $work
    );

    echo "<br><a href='advance.php'>Addtional info</a>";