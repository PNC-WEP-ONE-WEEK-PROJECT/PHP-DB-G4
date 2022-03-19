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
$posts = get_posts();
$posts = array_reverse($posts);

?>
    <!-- header -->
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
                <li class="d-flex"> <span class="cicle-user"><a href="#" ><img src="../images/user.png" alt="" width=" 100%" ></a></span> <span><?= $user["first_name"] . " " . $user["last_name"] ;?> </span></li>
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
                <small><?= date("F jS, Y",) . " at ". date("g:iA", strtotime($post['current_time'])).". "; ?><i class="fa fa-globe"></i></small>
            </div>
        </div>
        <div class="card-header-icon">
            <i class="fa fa-ellipsis-h icon"></i>
        </div>
        <!-- user edit and delete -->
        <div class="card-activity" style="display:none">
            <li><a class="edit-post" href="views/edit_view.php?id=<?= $post['id'];?>"><i class='fas fa-user-edit' style='font-size:16px;color:blue'></i> Edit post</a></li>
            <li><a class="delete-post" href="controllers/delete_post.php?id=<?= $post['id'];?>"><i class='far fa-trash-alt' style='font-size:16px;color:red'></i> Remove to Recyle bin</a></li>
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
                    if ($counter_like["post_id"] == $post['id']){
                        $increment ++;
                        $hide_like = "block";
                    }
                }
            ?>
            <div class="interest_post like_post" id="<?= $post['id'];?>">
                <small style="display:<?= $hide_like;?>"><span class="count_like" id="<?= $post['id'];?>"><?php if ( $increment == 1){echo  $increment." Like";}else{ echo  $increment." Likes";} ?></span></small>
                <!-- COUNTER LIKES -->
            </div>

            <?php 
                $count_cmm = 0 ;
                $show = "none";
            ?>
            <?php foreach($getComments as $comment): ?>
            <?php if ($comment["post_id"] == $post['id']){
                    $count_cmm += 1 ; 
                    $show = "block";
                }
            endforeach 
            ?>
                <div class="interest_post comment_post"  id="<?= $post['id'];?>" >
                    <small style="display:<?php echo $show ;?>"><span id="count_comment"  name="number_of_comment"> <?php if ($count_cmm == 1){echo $count_cmm." comment";}else{ echo $count_cmm." comments";} ; ?></span></small>
                </div>
        </div>
        <div class="post-footer">
            <div class="like">
                <a href="controllers/count_like.php?id=<?=$post['id'];?>"><i class="fa fa-thumbs-o-up"></i> Like</a>
            </div>
                <div class="comment" >
                    <button class = "click_comment" id="<?= $post['id'];?>"><i class='far fa-comment-alt' style='font-size:14px'></i> Comment</button>
                </div>
        </div>
    <!-- DISPLAY COMMENT -->
<?php    
$show_one_comment = true;
$getComments = array_reverse($getComments);
foreach($getComments as $comment):
    if ($comment["post_id"] == $post['id'] && $show_one_comment):
        $show_one_comment = false;

?>
        <div class="display_comment">
            <div class="user-profile">
                <img src="images/user.png" alt="" width="100%">
            </div>
            <div class= 'show_comment'>
                <p class='name'><?php echo $post['first_name'] . " ". $post['last_name'] ?></p>
                <small><?php echo $comment['comment'] ;?></small>
            </div>
        </div>
<?php endif ?>
<?php endforeach ?>

    <div class="comment_box" style="display:none;margin-top:20px" id="<?= $post['id'];?>">
    <div class="user-profile">
                <img src="images/user.png" alt="" width="100%">
            </div>
            <form action="controllers/comment_post.php?id=<?= $post['id'];?>" class="input_comment"  method="POST">
                <input type="text" placeholder="Write a comment..." name="comment" id="write_comment">
                <button type="submit" class="send-comment"><i class="material-icons" style="color:#24a0ed;cursor:pointer">send</i></button>
            </form>
        </div>
    </div>


<?php endforeach?>
<?php
require_once("templates/footer.php");
?>



