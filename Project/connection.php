<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "account";

    $conn = new mysqli ($server, $username, $password, $db);
    // mysql_query("SELECT * FROM `user`");

    // Check connection
    if ($conn->connect_error) {
        echo "Connection failed";
    }
?>