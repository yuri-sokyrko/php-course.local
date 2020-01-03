<?php

    session_start();

    $user = null;

    if(isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
    }

    if(!is_null($user)) {
        echo <<<HERE
            Name: $user[name]<br>
            Age: $user[age]<br>
            Work: $user[work]<br>
        HERE;
    } else {
        echo "<br>No user data<br>";
    }

    echo "<br><a href='logout.php'>Close this session</a><br>";