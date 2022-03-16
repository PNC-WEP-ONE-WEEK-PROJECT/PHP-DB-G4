<?php
/**
 * Your code here 
 */

// <!-- CONNECTION DATABASES  -->

$db = new PDO("mysql:host=localhost;dbname=facebook_pnc", "root", "");

function getItemById(){
    global $db;
    $user_statement = $db->query("SELECT id, first_name, last_name FROM users limit 1;");
    $getItem = $user_statement->fetch();
    return $getItem;
}

// function insert_post($user_id, $description){
//     // you code here 


// }


// function insert_post(){
//     // you code here 
// }


// function insert_post(){
//     // you code here 
// }


// function insert_post(){
//     // you code here 
// }

