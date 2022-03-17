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


function remove_post($id){
    // you code here 
    global $db;
    $statement = $db->prepare("DELETE FROM posts WHERE id=:id_post;");
    $statement->execute([
        ':id_post' => $id
    ]);
    return ($statement->rowCount() == 1); #Delete one row from database;
    
}


/**
 * Get a single item
 * @param integer $id : the item id
 
 * @return associative_array: the item related to given item id
 */
function getItemById($id)
{
    global $db; 
    $statement = $db->prepare("SELECT * FROM posts where id=:id;");
    $statement->execute([
        ':id'=> $id
    ]);
    $item = $statement->fetch();
    return $item;
}

// UPDATE POST ---------------------
function update_post($id, $description){
    global $db;
    $statement = $db->prepare("UPDATE posts SET description=:description WHERE id=:id");
    $statement->execute([
        ':description' => $description,
        ':id' =>  $id
    ]);

    return ($statement->rowCount() == 1);
}
