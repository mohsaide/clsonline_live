<?php

// <!-- --------------------------------- -->

// <!-- this file used by cron job to cleare expired sessions  -->

// <!-- No parameter take -->

// <!-- --------------------------------- -->

    $host = "162.241.24.137";
    $username = "clsonlin_SYSTEM";
    $password = "SYSTEM_2022";
    $dbname = "clsonlin_core";
    $conn = new mysqli($host, $username, $password, $dbname);
    mysqli_query($conn, 'SET SQL_SAFE_UPDATES = 0;');
    mysqli_query($conn, 'update user_auth set value = null , expired_date = null where expired_date <= now();');
    mysqli_query($conn, 'SET SQL_SAFE_UPDATES = 1;');


?>


