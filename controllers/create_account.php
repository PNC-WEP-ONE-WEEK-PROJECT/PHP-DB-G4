<?php
require_once("../models/database.php");
$firstN = $_POST["first-name"];
$lastN = $_POST["last-name"];
$bd = $_POST["birthday"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$password = $_POST["password"];

// echo $firstN,$lastN,$bd,$gender,$email,$password;
insert_users($firstN,$lastN,$bd,$gender,$email,$password);

header("location: ../Login/login.php");
?>