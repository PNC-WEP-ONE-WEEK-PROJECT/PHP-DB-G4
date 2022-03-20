
<?php

require_once("../models/database.php");
if(isset($_GET["id"])){
    $_SESSION["user_id"] = $_GET["id"];
    logout_users($_SESSION["user_id"]);
    login_users($_SESSION["user_id"]);
}
header('location: ../index.php');









