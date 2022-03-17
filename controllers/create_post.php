<?php
/**
 * Your code here
 */

require_once("../models/database.php");

 if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['description']) && !empty($_POST['user_id'])){
     $get_desc = $_POST["description"];
     $get_user_id = $_POST["user_id"];
      // UPLOAD IMAGE
     $target = "../images/uploads/" .$_FILES['uploadimg']['name'];
     move_uploaded_file($_FILES['uploadimg']['tmp_name'],$target);
     $file_name = $_FILES['uploadimg']['name'];
     create_post($get_user_id, $get_desc, $file_name);
 }

header("location: /index.php");
