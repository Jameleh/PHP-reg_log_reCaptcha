<?php

// Подключение к базе данных
$servername = "localhost";
$username = "root"; // Default MySQL username for WAMP
$password = ""; // Default MySQL password for WAMP
$Db = "OnlyDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $Db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>