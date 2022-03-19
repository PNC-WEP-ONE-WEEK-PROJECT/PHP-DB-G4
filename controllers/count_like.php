<?php
require_once("../models/database.php");
$number_like = $_POST["counter"];
$post_id = $_POST["id"];

echo $number_like;


update_counter_likes($post_id, $number_like);

// if ($number_like==5){
//     echo $number_like;
// }else{
//     header("location: /index.php");
// }











