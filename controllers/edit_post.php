<?php
require_once('../models/database.php');
$id = $_POST['id'];
$description = $_POST['description'];


update_post($id, $description);

header('location: ../index.php');