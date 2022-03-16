<?php
/**
 * Your code here 
 */

// <!-- CONNECTION DATABASES  -->

$db = new PDO("mysql:host=localhost;dbname=facebook_pnc", "root", "");
$user_statement = $db->query("SELECT first_name, last_name FROM users limit 1;");
$user = $user_statement -> fetch();
?>