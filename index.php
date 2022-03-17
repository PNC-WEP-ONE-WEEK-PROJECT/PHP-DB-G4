<?php
/**
 * Your code here
 */

//  contain user post --
require_once("templates/header.php");
require_once("models/post.php");
require_once("views/post_view.php");
   // TO DO:
   // Get the id of the item to update in query

$posts=get_posts();

$posts = array_reverse($posts);
?>

<?php foreach($posts as $post):?>

 <div class="container-card" id="<?=$post["id"]?>">
        <div class="card-header post-header">
            <div class="card-header">
            <img src="images/icon-facebook.webp" alt="" width="10%">
            <div class="name">
                <h5 class="user_name"><?=$post["first_name"] . " " . $post["last_name"]?></h5>
                <p><?= $post["current_time"]?></p>
                <!-- <p class="post_time">Just now <i class="fa fa-globe"></i></p> -->
            </div>
            </div>
            <div class="card-header-icon">
                <li class="icon"><i class="fa fa-ellipsis-h" id="<?= $post['id'];?>"></i></li>
            </div>
        </div>
         <!-- user edit and delete -->

         <div class="card-activity" style="display:none" id="<?= $post['id'];?>">
            <li><a class="edit-post" href="views/edit_view.php?id=<?= $post['id'];?>"><i class="fa fa-edit"></i> Edit post</a></li>
            <li><a class="delete-post" href="controllers/delete_post.php?id=<?= $post['id'];?>"><i class="fa fa-edit"></i> Remove to Recyle bin</a></li>
        </div>
        <div class="post-body">
            <div class="description">
                <p class="description"><?= $post["description"]?></p>
            </div>
            <div class="image-posted">
                <img src="images/uploads/<?= $post["file_img"]?>" alt="" width="100%">
            </div>
        </div>
        <hr>
        <div class="post-footer">
            <div class="like">
                <p><i class="fa fa-thumbs-o-up"></i> Like</p>
            </div>
            <div class="comment">
                <p><i class="fa fa-comment-o"></i> Comment</p>
            </div>
        </div>
        
    </div>
<?php endforeach?>
<?php
require_once("templates/footer.php");
?>



