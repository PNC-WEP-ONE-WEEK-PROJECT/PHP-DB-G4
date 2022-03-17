<?php
/**
 * Your code here 
 */

// <!-- CONNECTION DATABASES  -->
$db = new PDO("mysql:host=localhost;dbname=facebook_pnc", "root", "");

function create_post($user_id, $description, $img){
    // you code here 
    global $db;
    $post_statement = $db->prepare("INSERT INTO posts (user_id, description, file_img) VALUES (:id, :desc, :image);");
    $post_statement->execute([
        ':id' => $user_id,
        ':desc' => $description,
        ':image' => $img
    ]);
    return $post_statement->rowCount()==1;
}
?>