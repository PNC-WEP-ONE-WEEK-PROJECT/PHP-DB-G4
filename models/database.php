<?php
/**
 * Your code here 
 */

// <!-- CONNECTION DATABASES  -->

$db = new PDO("mysql:host=localhost;dbname=facebook_pnc", "root", "");

function getItems(){
    global $db;
    $user_statement = $db->query("SELECT users.id, users.first_name, users.last_name, description FROM posts INNER JOIN users on posts.user_id=users.id;");
    $getItem = $user_statement->fetchAll();
    return $getItem;
    echo $getItem;
}


// function getItemById($id)
// {
//     global $db;
//     $statement = $db->prepare("SELECT posts.user_id FROM posts where id=:user_id");
//     $statement->execute([
//         ":user_id" => $id,
//     ]);
//     $getId = $statement->fetch();
//     return $getId;
// }



function create_post($user_id, $description){
    // you code here 
    global $db;
    $post_statement = $db->prepare("INSERT INTO posts (user_id, description) VALUES (:id, :desc);");
    $post_statement->execute([
        ':id' => $user_id,
        ':desc' => $description
    ]);
    return $post_statement->rowCount()==1;
}


// function insert_post(){
//     // you code here 
// }


// function insert_post(){
//     // you code here 
// }


// function insert_post(){
//     // you code here 
// }


