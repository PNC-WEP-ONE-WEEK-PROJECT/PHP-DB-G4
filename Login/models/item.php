<?php
    // database connection
$db= new PDO("mysql:host=localhost;dbname=crud","root","");
/**
 * Get all items  
 * @return array of items 
 */
function get_user_email($email)
{
    global $db;
    $statement = $db->query("SELECT $email AS user_email FROM users;");
    $email = $statement->fetch();
    return $email;
}


