<?php
require_once("../models/database.php");
$get_Comment = $_POST['comment'];
$get_post_id = $_GET["id"];
comment_post($get_Comment,$get_post_id ,1);
header('location: ../index.php');
?>

