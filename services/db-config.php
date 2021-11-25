<?php

$servername = "localhost";
$username = "penny";
$password = "123";
$dbname = "fine_art_shop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
