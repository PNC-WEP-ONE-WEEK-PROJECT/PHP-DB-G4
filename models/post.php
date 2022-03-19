<?php


$db = new PDO("mysql:host=localhost;dbname=facebook_pnc", "root", "");

// * Get a single item
//  * @param integer $id : the item id
 
//  * @return associative_array: the item related to given USER ID
//  */

// function get_user_Id($id)
// {
//     global $db; 
//     $statement = $db->prepare("SELECT*FROM users where users.id=:id;");
//     $statement->execute([
//         ':id'=> $_SESSION($id)
//     ]);
//     $user = $statement->fetch();
//     return $user;
// }


// TO POST
function get_posts(){
    global $db;
    $user_statement = $db->query("SELECT posts.id, users.first_name, users.last_name, posts.file_img, description, post_date as 'current_time' FROM posts INNER JOIN users on posts.user_id=users.id;");
    $getItem = $user_statement->fetchAll();
    return $getItem;
}
/**
 * Get a single item
 * @param integer $id : the item id
 
 * @return associative_array: the item related to given item id
 */
function getItemById($id)
{
    global $db; 
    $statement = $db->prepare("SELECT first_name, last_name, file_img, description FROM posts INNER JOIN users on posts.user_id=users.id where posts.id=:id;");
    $statement->execute([
        ':id'=> ($id)
    ]);
    $item = $statement->fetch();
    return $item;
}


function getCommentById(){
    global $db; 
    $statement = $db->query("SELECT * FROM comment_post;");
    $contents = $statement->fetchAll();
    return $contents;
}


function likes_posts(){
    global $db; 
    $statement = $db->query("SELECT*FROM likes;");
    $likes = $statement->fetchAll();
    return $likes;
}