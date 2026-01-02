<?php
    // $host = "localhost";
    // $username = "root";
    // $password = "";
    // $database = "test_db";

    // Creating Connection
    // $conn = mysqli_connect(hostname: $host, username: $username, password: $password, database: $database);
    // $conn = mysqli_connect($host, $username, $password, $database);

    // // Checking Connection
    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }
    // echo "Connected Successfully! </br>";

    // Insert Data
    $sql = "INSERT INTO users (id, name, email) VALUES (1, 'Aashutosh', 'ashutosh@gmail.com')";

    // checking if data is inserted
    if (mysqli_query($conn, $sql)) {
        echo "Inserted Successfully";
    } else {
        echo "ERROR: " . mysqli_error($conn);
    }

    // Updating Data
    $sql = "UPDATE users SET email = 'newmail@gmail.com' where id = 1";

    if (mysqli_query($conn, $sql)) {
        echo ("Updated Successfully");
    }

    // DISPLAYING DATA
    $sql = "SELECT id, name, email FROM users";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "</br>ID: ". $row['id']. "</br>Name: " . $row['name'] . "</br>Email: " . $row['email'];
        }
    } else {
        echo "No records found!";
    }


    $sql = "DELETE FROM users WHERE id=1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_query($conn, $sql)) {
        echo ("Deleted Successfully!");
    }

?>