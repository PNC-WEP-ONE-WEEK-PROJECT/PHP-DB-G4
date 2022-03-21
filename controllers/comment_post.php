<?php
require_once("../models/database.php");
if (!empty($_POST["comment"])){

    $get_Comment = $_POST['comment'];
    $get_post_id = $_GET["id"];
    $user_id = 
    comment_post($get_Comment,$get_post_id ,1);
}
header('location: ../index.php');
?>

