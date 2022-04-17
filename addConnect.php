<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "visitfynDB";

$dbconnect = mysqli_connect($servername, $username, $password, $dbname);
if (!$dbconnect) {
    die("Could not connect");
}