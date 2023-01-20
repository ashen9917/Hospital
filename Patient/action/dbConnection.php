<?php

$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "hospital";
$port = "3306";

$connection = new mysqli($host, $username, $passwd, $dbname, $port);

if ($connection->connect_error) {
    echo 'Error !, Not Connected'
        . $connection->connect_error;
} else {
    // echo "conected Successfully";
}
