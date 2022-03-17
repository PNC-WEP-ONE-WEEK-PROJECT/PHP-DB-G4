<?php


$db = new PDO("mysql:host=localhost;dbname=facebook_pnc", "root", "");
function get_posts(){
    global $db;
    $user_statement = $db->query("SELECT posts.id, users.first_name, users.last_name, posts.file_img, description, post_date as 'current_time' FROM posts INNER JOIN users on posts.user_id=users.id;");
    $getItem = $user_statement->fetchAll();
    return $getItem;
}
// FORMAT (getdate(), 'dddd, MMMM, yyyy')


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
