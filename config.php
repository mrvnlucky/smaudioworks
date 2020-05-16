<?php

    $db_host = "localhost";
    $db_user = "root"; 
    $db_pass = "";
    $db_name = "smaudioworks";

    // create connection
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
