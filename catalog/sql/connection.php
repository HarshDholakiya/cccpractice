<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "ccc_practice";

function mysqlConnection()
{
    global $server, $username, $password, $database;
    $conn = mysqli_connect($server, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection error: $conn->connect_error");
    };
    return $conn;
};