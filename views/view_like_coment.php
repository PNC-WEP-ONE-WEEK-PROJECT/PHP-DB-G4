
<div class="content_like_comment">
            <div class="interest_post">
                <small><span class="count_like" name="number_of_like" id="<?= $post['id'];?>">0</span> Likes</small>
            </div>
            <div class="interest_post">
                <small><span id="count_comment"  name="number_of_comment">5</span> Comment</small>
            </div>
        </div>
        <hr>
        <div class="post-footer">
            <div class="like">
               <a href="controllers/count_like.php?id='<?= $post['id'];?>'"><p class="click_like" id="<?= $post['id'];?>"><i class="fa fa-thumbs-o-up"></i> Like</p></a> 
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