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
<?php 
$getComments = getCommentById(); 

?>
 <div class="container-card" id="<?=$post["id"]?>">
        <div class="post-header">
            <div class="post-header-profile" style="display:flex">
                <div class="user-profile">
                    <img src="images/user.png" alt="" width="100%">
                </div>
                <div class="name">
                    <h4 class="user_name"><?=$post["first_name"] . " " . $post["last_name"]?></h4>
                    <small><?= date("F jS, Y",) . " at ". date("g:iA", strtotime($post['current_time'])); ?></small>
                </div>
            </div>
            <div class="card-header-icon">
                <i class="fa fa-ellipsis-h icon"></i>
            </div>
            <!-- user edit and delete -->
            <div class="card-activity" style="display:none">
                <li><a class="edit-post" href="views/edit_view.php?id=<?= $post['id'];?>"><i class="fa fa-edit"></i> Edit post</a></li>
                <li><a class="delete-post" href="controllers/delete_post.php?id=<?= $post['id'];?>"><i class="fa fa-edit"></i> Remove to Recyle bin</a></li>
            </div>
        </div>
        <div class="post-body">
            <div class="description">
                <p><?= $post["description"]?></p>
            </div>
            <div class="image-posted">
                <img src="images/uploads/<?= $post["file_img"]?>" alt="" width="100%">
            </div>
        </div>
        <!-- VIEWER LIKE OR COMMENT -->
        <div class="content_like_comment">
            <div class="interest_post">
                <small><span id="count_like" name="number_of_like">0</span> Likes</small>
            </div>
            <div class="interest_post">
                <small><span id="count_comment"  name="number_of_comment">5</span> Comment</small>
            </div>
        </div>
        <hr>
        <div class="post-footer">
            <div class="like">
                <p id ="click_like"><i class="fa fa-thumbs-o-up"></i> Like</p>
            </div>
            <div class="comment">
                <p id = "click_comment"><i class="fa fa-comment-o"></i> Comment</p>
            </div>
        </div>
        <hr>
        <div class="display_comment">
            <div class="user-profile">
                <img src="images/user.png" alt="" width="100%">
            </div>
            <div class="show_comment">
                <p class="name"><?=$post["first_name"] . " " . $post["last_name"]?></p>
                <small><?php foreach($getComments as $comment){if ($comment["post_id"] == $post['id']){ echo $comment["comment"]; } else {echo "";}}  ?></small>
            </div>
        </div>
        <div class="comment_box">
            <div class="user-profile">
                <img src="images/user.png" alt="" width="100%">
            </div>
            <div class="input_comment">
            <input type="text" placeholder="Write a comment..." name="comment" id="write_comment">
            </div>
        </div>
    </div>
<?php endforeach?>
<?php
require_once("templates/footer.php");
?>



