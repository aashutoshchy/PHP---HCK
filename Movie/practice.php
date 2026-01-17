<?php
    //database credentials
    $host = "localhost";
    $username = "root";
    $password = "";

    // Creating connection
    $conn = mysqli_connect($host, $username, $password);
    if ($conn) {
        //echo "Connection Successful! </br>";
    }

    // Creating database
    $createDatabase = "CREATE DATABASE IF NOT EXISTS WORKSHOP8";
    if (mysqli_query($conn, $createDatabase)) {
        //echo "</br>Database Created!";
    }

    // Use database
    mysqli_select_db($conn, 'WORKSHOP8');

    // Create Table
    $createTable = "CREATE TABLE IF NOT EXISTS movie(title varchar(255))";
    if(mysqli_query($conn, $createTable)) {
        echo "</br>Table Created";
    }

    // Getting Value from input field
    if (isset($_GET['q'])) {
        $movieName = $_GET['q'];
    }

    // now we check if the input we get(movieName) already exists in database or not
    // first select all data where condition is movieName
    $selectMovie = "SELECT * FROM movie WHERE title = '$movieName'";
    $result = mysqli_query($conn, $selectMovie); // stores the displayed data in line 34

    while ($row = mysqli_fetch_assoc($result)) {
        $row[] = $row;
    }

    // Converting assoc array to json again

    $json_data = json_encode($rows);
    header('Content-Type: application/json');
    echo $json_data;


    // then if movieName doesnot exist in database, fetch data from API
    if (mysqli_num_rows($result) == 0) {
        $encodedMovieName = urlencode($movieName);
        $url = "https://www.omdbapi.com/?t=$encodedMovieName&apikey=9ceaf3a1";
         $response = file_get_contents($url); //storing data fetch from API
         echo $response;
         $toPHP = json_decode($response, true); //converting JSON to PHP string
         $title = $toPHP['Title'];

        //  Inserting new data to database
        $insert = "INSERT INTO movie (title) VALUES ('$title')";
        if (mysqli_query($conn, $insert)) {
            echo "</br>Movie Inserted";
        }

    }
?>