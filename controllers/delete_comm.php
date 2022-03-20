<?php
/**
 * Your code here
 */
require_once('../models/database.php');
$id= $_GET['id']; 
delete_comment($id);
echo $id;


header("location: /index.php?id=$id");