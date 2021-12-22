<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS info";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    ?>
<?php

    $conn = mysqli_connect("localhost","root","","info");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $query = "CREATE TABLE IF NOT EXISTS users(
        user_id int(100) PRIMARY KEY AUTO_INCREMENT NOT null,
        username varchar(100) NOT null,
        email varchar(100) NOT null,
        pwd varchar(100) NOT null
    );";
    mysqli_query($conn, $query);
    $query = "CREATE TABLE IF NOT EXISTS basket(
        basket_id int(100) PRIMARY KEY AUTO_INCREMENT NOT null,
        user_id int(100) NOT null,
        item_id int(100) NOT null,
    	price DECIMAL(6,2) NOT null,
        img varchar(100) NOT null,
    	items_number int(100) NOT null
);";
    mysqli_query($conn, $query);

?>