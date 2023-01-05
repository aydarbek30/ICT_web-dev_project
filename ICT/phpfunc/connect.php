<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wspkbtu";

$con = new PDO('mysql:host=localhost; dbname=wspkbtu; charset=utf8', 'root', '');


if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
