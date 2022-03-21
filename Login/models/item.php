<?php
    // database connection
$db= new PDO("mysql:host=localhost;dbname=facebook_pnc","root","");
/**
 * Get all items  
 * @return array of items 
 */

function get_users($email, $password){
    global $db;
    $statement = $db->prepare("SELECT*FROM users WHERE users.email = :email and user_password = :password_user;");
    $statement->execute([
        ':email' => $email,
        ':password_user' => $password
    ]);
    return $statement->fetch();
    
}
