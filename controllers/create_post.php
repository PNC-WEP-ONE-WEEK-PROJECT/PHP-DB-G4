<?php
/**
 * Your code here
 */

require_once("../models/database.php");

 if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['description']) && !empty($_POST['user_id'])){
      $get_desc = $_POST["description"];
      $get_user_id = $_POST["user_id"];
      create_post($get_user_id, $get_desc);
      echo $get_desc;
 }


header("location: /index.php");