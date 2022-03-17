<?php


$db = new PDO("mysql:host=localhost;dbname=facebook_pnc", "root", "");

function get_posts(){
    global $db;
    $user_statement = $db->query("SELECT users.id, posts.id, users.first_name, users.last_name, description FROM posts INNER JOIN users on posts.user_id=users.id;");
    $getItem = $user_statement->fetchAll();
    return $getItem;
}
