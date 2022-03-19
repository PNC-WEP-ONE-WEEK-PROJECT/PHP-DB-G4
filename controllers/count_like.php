<?php
require_once("../models/database.php");

$post_id = $_GET["id"];
echo $post_id;

insert_likes($post_id, 1);

header("location: /index.php");







