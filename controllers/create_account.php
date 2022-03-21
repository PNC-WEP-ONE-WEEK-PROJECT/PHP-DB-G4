<?php
require_once("../models/database.php");
$firstN = $_POST["first-name"];
$lastN = $_POST["last-name"];
$bd = $_POST["birthday"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirmed = $_POST["comfirmpass"];

if ($password==$confirmed){
    $confirmed=true;
    insert_users($firstN,$lastN,$bd,$gender,$email,$password, $confirmed);
}
header("location: ../Login/login.php");

?>