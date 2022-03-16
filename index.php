<?php
/**
 * Your code here
 */

//  contain user post --
require_once("templates/header.php");
require_once("views/post_view.php");
$posts=getItems();

?>

<?php foreach($posts as $post):?>

 <div class="container-card opacity">
        <div class="card-header post-header">
            <div class="card-header">
            <img src="images/icon-facebook.webp" alt="" width="10%">
            <div class="name">
                <input type="hidden" value="<?=$post["id"];?>" name="itemId">
                <h5 class="user_name"><?=$post["first_name"] . " " . $post["last_name"]?></h5>
                <p class="post_time">Just now <i class="fa fa-globe"></i></p>
            </div>
            </div>
            <div class="card-header-icon">
                <div class="icon" onclick="showActivity()">
                    <li><img src="images/more.svg" alt="gallery"></li>
                </div>
            </div>
        </div>
         <!-- user edit and delete -->
         <div class="card-activity" style="display:none">
            <li><a class="edit-post" href="controllers/edit_post.php"><i class="fa fa-edit"></i> Edit post</a></li>
            <li><a class="delete-post" href="controllers/delete_post.php"><i class="fa fa-edit"></i> Remove to Recyle bin</a></li>
        </div>
        <div class="post-body">
            <div class="description">
                <p class="description"><?= $post["description"]?></p>
            </div>
            <div class="image-posted">
                <img src="images/image-1.jpg" alt="" width="100%">
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



