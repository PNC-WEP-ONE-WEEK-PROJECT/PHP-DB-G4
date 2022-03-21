<?php
session_start();

/**
 * Your code here
 */

 // TO DO:
   // Get the id of the item to update in query

require_once("templates/header.php");
require_once("models/post.php");
$posts = information_users();
$posts = array_reverse($posts);
foreach($posts as $user){
    $FirstName = $user["first_name"];
    $LastName = $user["last_name"];
    $_SESSION["user_id"] = $user["user_id"];
    $user_id =  $_SESSION["user_id"];
}
require_once("views/post_view.php");
?>

<nav class="navbar opacity">
        <div class="container-fluid">
            <!-- LOGO FB -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><img src="../images/icon-facebook.webp" alt="" width="25%"></a>
            </div>
            <!-- page home and group -->
            <div class="nav_pages">
                <li id="active" class="fa fa-home" style="font-size:25px"></li>
                <li class="fa fa-group" style="font-size:22px"></li>
            </div>      
            <!-- ICON USER NAME -->
            <div class="nav_icons">
                <div class="user_profile"><a href="views/profile.php" ><img src="../images/user.png" alt="" width=" 100%"></a> <span ><?=$FirstName?></span></div>
                <li class="cicle-user"><a href="#" ><i class="fa fa-caret-down" style="font-size:20px"></i></a></li>
            </div>
        </div>
  </nav>


<!-- PART OF POSTS -->
<div class="container-card opacity">
    <div class="card-header">
        <div class="profile">
            <img src="images/user.png" alt="" width="100%">
        </div>
        <span class="add-post" onclick="create_post()">What's your mind?</span>
    </div>
    <hr>
    <div class="card-body">
        <div class="btn photo"  onclick="create_post()">
            <img src="images/gallery.svg" alt="" width="100%">
            <span>Photo</span>
        </div>
        <div class="btn feeling"  onclick="create_post()">
            <img src="images/Happy.png" alt=""width="20%">
            <span >Feeling</span>
        </div>
    </div>
</div>

<?php foreach($posts as $post):
        if (!empty($post["post_id"])):
        $getComments = getCommentById(); 
        ?>

        <div class="container-card" id="<?=$post["post_id"]?>">
            <div class="post-header">
                <div class="post-header-profile" style="display:flex">
                    <div class="user-profile">
                        <img src="images/user.png" alt="" width="100%">
                    </div>
                    <div class="name">
                        <h4 class="user_name"><?=$post["first_name"] . " " . $post["last_name"]?></h4>
                        <small><?= date("F jS, Y",) . " at ". date("g:iA", strtotime($post['current_time'])).". "; ?><i class="fa fa-globe"></i></small>
                    </div>
                </div>
                <div class="card-header-icon">
                    <i class="fa fa-ellipsis-h icon"></i>
                </div>
                <!-- user edit and delete -->
                <div class="card-activity" style="display:none">
                    <li><a class="edit-post" href="views/edit_view.php?id=<?= $post['post_id'];?>"><i class='fas fa-user-edit' style='font-size:16px;color:blue'></i> Edit post</a></li>
                    <li><a class="delete-post" href="controllers/delete_post.php?id=<?= $post['post_id'];?>"><i class='far fa-trash-alt' style='font-size:16px;color:red'></i> Remove to Recyle bin</a></li>
                </div>
            </div>
            <div class="post-body" style="margin-top: 40px;">
                <div class="description">
                    <p><?= $post["description"]?></p>
                </div>
                <div class="image-posted" style="margin-bottom:10px">
                    <img src="images/uploads/<?= $post["file_img"]?>" alt="" width="100%">
                </div>
            </div>
            <!-- VIEWER LIKE OR COMMENT -->
            <div class="content_like_comment">
                    <?php 
                        $increment = 0;
                        $hide_like = "none";
                        foreach(likes_posts() as $counter_like){
                            if ($counter_like["post_id"] == $post['post_id']){
                                $increment ++;
                                $hide_like = "block";
                            }
                        }
                    ?>
                    <div class="interest_post like_post" id="<?= $post['post_id'];?>">
                        <small style="display:<?= $hide_like;?>"><span class="count_like" id="<?= $post['post_id'];?>"><?php if ( $increment == 1){echo  $increment." Like";}else{ echo  $increment." Likes";} ?></span></small>
                        <!-- COUNTER LIKES -->
                    </div>

                    <?php 
                        $count_cmm = 0 ;
                        $show = "none";
                    ?>
                    <?php foreach($getComments as $comment): ?>
                    <?php if ($comment["post_id"] == $post['post_id']){
                            $count_cmm += 1 ; 
                            $show = "block";
                        }
                    endforeach 
                    ?>
                        <div class="interest_post comment_post"  id="<?= $post['post_id'];?>" >
                            <small style="display:<?php echo $show ;?>"><span id="count_comment"  name="number_of_comment"> <?php if ($count_cmm == 1){echo $count_cmm." comment";}else{ echo $count_cmm." comments";} ; ?></span></small>
                        </div>
            </div>
            <div class="post-footer">
                <!-- <iframe src="" style="display:none;" name="fTarget" frameborder="0"></iframe> -->
                <form action="controllers/count_like.php" class="like" target="fTarget" method="post">
                    <input type="hidden" value="<?= $user_id ?>" name="user_id">
                    <input type="hidden" value="<?= $post["post_id"]?>" name="post_id">
                    <button type="submit" id="<?= $post["post_id"]?>" class="btn_likes"><i class="fa fa-thumbs-o-up"> Like</i></button>
                </form>
                <div class="comment" >
                    <button class = "click_comment" id="<?= $post['post_id'];?>"><i class='far fa-comment-alt' style='font-size:14px'></i> Comment</button>
                </div>
            </div>
            <!-- DISPLAY COMMENT -->
            <div class="container_comments">
                <a  class= "view_more" style="cursor:pointer">View all comments</a>
                <div class="show_all_comments" style="display:none">
                    <?php 
                    // $getComments = array_reverse($getComments);
                    foreach($getComments as $comment):
                        if ($comment["post_id"] == $post['post_id']):
                        ?>
                            <div class="display_comment" >
                                <div class="user-profile">
                                    <img src="images/user.png" alt="" width="100%">
                                </div>
                                <div class= 'show_comment'>
                                    <p class='name'><?php echo $post['first_name'] . " ". $post['last_name'] ?></p>
                                    <small><?php echo $comment['comment'] ;?></small>
                                    
                                </div>
                                <div class="update_comm">
                                    <li style="margin-top: 10px;cursor:pointer;" class="show_action">
                                        <i class="material-icons" style>more_vert</i>
                                    </li>
                                    <div class="comment_action" style="margin-top: 10px;cursor:pointer;display:none" >
                                        <div class="edit_comm">
                                            <a href="controllers/edit_comm.php?id=<?= $comment['comment_id'];?>" id="edit">Edit</a>
                                        </div>
                                        <div class="delete_comm">
                                            <a href="controllers/delete_comm.php?id=<?= $comment['comment_id'];?>" id="delete">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif ?>
                    <?php endforeach ?>
                </div>
                <?php    
                    $show_one_comment = true;
                    $getComments = array_reverse($getComments);
                    foreach($getComments as $comment):
                        if ($comment["post_id"] == $post['post_id'] && $show_one_comment):
                            $show_one_comment = false;
                ?>
                            <div class="display_comment" id ="comment_appear">
                                <div class="user-profile">
                                    <img src="images/user.png" alt="" width="100%">
                                </div>
                                <div class= 'show_comment'>
                                    <p class='name'><?php echo $post['first_name'] . " ". $post['last_name'] ?></p>
                                    <small><?php echo $comment['comment'] ;?></small>
                                    
                                </div>
                                <div class="update_comm">
                                    <li style="margin-top: 10px;cursor:pointer;" class="show_action">
                                        <i class="material-icons" style>more_vert</i>
                                    </li>
                                    <div class="comment_action" style="margin-top: 10px;cursor:pointer;display:none" >
                                        <div class="edit_comm">
                                            <a href="controllers/edit_comm.php?id=<?= $comment['comment_id'];?>" id="edit">Edit</a>
                                        </div>
                                        <div class="delete_comm">
                                            <a href="controllers/delete_comm.php?id=<?= $comment['comment_id'];?>" id="delete">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif ?>
                    <?php endforeach ?>
                <div class="comment_box" style="display:none;margin-top:20px" id="<?= $post['post_id'];?>">
                    <div class="user-profile">
                        <img src="images/user.png" alt="" width="100%">
                    </div>
                    <form action="controllers/comment_post.php?id=<?= $post['post_id'];?>" class="input_comment"  method="POST">
                        <input type="text" placeholder="Write a comment..." name="comment" id="write_comment" required>
                        <button type="submit" class="send-comment"><i class="material-icons" style="color:#24a0ed;cursor:pointer">send</i></button>
                    </form>
                </div>
            </div>
        </div>
        <?php endif ?>
    <?php endforeach?>
<!-- footer -->
<div class="mt-5 mb-5 text-center" style="text-align: center;margin:30px 0;">
    <footer>
        <small>Facebook version 2.0 Created by Mr.Tim and Mr.Sauth</small><br>
        <small>Database and PHP Project</small>
    </footer>
</div>
<?php
require_once("templates/footer.php");
?>