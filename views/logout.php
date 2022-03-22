<?php
require_once ("../models/post.php");
session_start();
$_SESSION= [];
session_unset();
session_destroy();
// $user_id = $_SESSION['user_id'];
// // unset($_SESSION['user_id']);
// log_out(0,$user_id);

header("location: ../pages.php");
// echo "HEllo";
?>