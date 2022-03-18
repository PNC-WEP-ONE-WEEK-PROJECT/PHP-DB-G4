<?php
/**
 * Your code here 
 */

// <!-- CONNECTION DATABASES  -->
$db = new PDO("mysql:host=localhost;dbname=facebook_pnc", "root", "");
function create_post($user_id, $description, $img, $date){
    // you code here 
    global $db;
    $post_statement = $db->prepare("INSERT INTO posts (user_id, description, file_img, post_date) VALUES (:id, :desc, :image, :post_date);");
    $post_statement->execute([
        ':id' => $user_id,
        ':desc' => $description,
        ':image' => $img,
        ':post_date' => $date,
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

// UPDATE POST ---------------------
function update_post($id, $description, $img){
    global $db;
    $statement = $db->prepare("UPDATE posts SET description=:description, file_img=:image WHERE id=:id");
    $statement->execute([
        ':description' => $description,
        ':id' =>  $id,
        ':image'=> $img
    ]);
    return ($statement->rowCount() == 1);
}


//   UPDATE COUNTER LIKE

// function update_counter_likes($post_id, $number_like){
//     global $db;
//     $statement = $db->prepare("UPDATE likes SET post_id=:id, count_like = :number_like WHERE post_id=:id");
//     $statement->execute([
//         ':id' =>  $post_id,
//         ':number_like' => $number_like
//     ]);
//     return ($statement->rowCount() == 1);
// }

function comment_post($comment,$post_id,$user_id){
    global $db;
    $statement = $db->prepare("INSERT INTO comments(content,post_id,user_id) value(:comment,:post_id,:user_id)");
    $statement->execute([
        ':comment' => $comment,
        ':post_id' =>  $post_id,
        'user_id'=> $user_id
    ]);
    return ($statement->rowCount() == 1);
}
