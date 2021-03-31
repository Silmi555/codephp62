<?php
    $host = "localhost";
    $username = "root";
    $password = "";

    $database = 'codephp62';

    $myconn = new mysqli($host, $username, $password, $database);
    if ($myconn->connect_errno) {
        printf("Connect failed: %s\n", $myconn->connect_error);
        exit();
    }