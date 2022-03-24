<?php
require_once("../models/database.php");
if (!empty($_POST["comment"])){
    $get_Comment = $_POST['comment'];
    $user_id = $_POST["user"];
    $get_post_id = $_GET["id"];
    comment_post($get_Comment,$get_post_id ,$user_id);
}
header('location: ../index.php');
?>

