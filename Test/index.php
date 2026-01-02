<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "test_db";

    // Creating Connection
    $conn = mysqli_connect(hostname: $host, username: $username, password: $password, database: $database);

    // Checking Connection
    if (!$scan) {
        die("Connection failed: " . mysqli_connect_error())
    }
    echo "Connected Successfully!"
?>