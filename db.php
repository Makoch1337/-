<?php
$servername = 'localhost';
$username = 'aviasales';
$password = 'aviasales';
$dbname = "aviasales";
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connection) {
    die('Database connection error');
}
