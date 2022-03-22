
<?php require_once("../templates/header.php")?>
<?php
session_start();
require_once("../models/post.php");
$posts = information_users();
$posts = array_reverse($posts);
foreach($posts as $user){
    $FirstName = $user["first_name"];
    $LastName = $user["last_name"];
    $_SESSION["user_id"] = $user["user_id"];
    $user_id =  $_SESSION["user_id"];
}
$profiles = profile_user();

require_once("post_view.php");
?>

<nav class="navbar_facebook opacity">
        <div class="container-fluid">
            <!-- LOGO FB -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><img src="../images/icon-facebook.webp" alt="" width="25%"></a>
            </div>
            <!-- page home and group -->
            <div class="nav_pages">
                <a href="../index.php"> <li class="fa fa-home" style="font-size:25px"></li></a>
                <li class="fa fa-group" style="font-size:22px"></li>
            </div>      
            <!-- ICON USER NAME -->
            <div class="nav_icons">
                <div class="user_profile"><a href="views/profile.php" ><img src="../images/user.png" alt="" width=" 100%"></a> <span ><?=$FirstName?></span></div>
                <li class="cicle-user"><a href="#" ><i class="fa fa-caret-down" style="font-size:20px"></i></a></li>
            </div>
        </div>
  </nav>

<!-- PROFILES -->
<div class="container" style="display:none">
      <div class="wrapper">
        <section class="post">
          <form action="controllers/create_post.php" method="post" enctype="multipart/form-data">
          <header class="create-post-header" style="display:flex">
            <h2>Create post</h2>
            <div class="cancel-post" onclick="cancel_post()">
              <li><img src="images/Cancel.png" alt="gallery" width="80%" ></li>
            </div>
          </header>
          <hr>
            <div class="content">
              <img src="images/user.png" alt="logo" class="icon_user">
              <div class="details">
                <input type="hidden" name="user_id" value="<?= $user_id ?>">
                <p><?= $FirstName . $LastName;?></p>
      
                <div class="privacy">
                  <i class="fas fa-user-friends"></i>
                  <span> Friends</span>
                  <i class="fas fa-caret-down"></i>
                </div>
              </div>
            </div>
            <div class="user-post">
              <textarea name="description" class= "title" placeholder="What's your mind?" spellcheck="false" style="font-size:16px"></textarea>
              <div class="add-gallery">
                <label for="click_img">
                  <div class="options add-icon" >
                    <img src="" alt="" id="image-post" width="100%">
                    <input type="file" name="uploadimg" onchange="uploadImage(event)" id="click_img" style="display:none">
                    <div class="add-image">
                      <img src="../images/add-photo.png" alt="" width= "10%"> <br> Add Photo 
                    </div>
                  </div>
                </label>
              </div>
            </div>
            <button id="sum_post" type="submit" name="submit">Post</button>
          </form>
        </section>
      </div>
    </div>

<!-- BOOSTTRAP STYLE -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <div class="row py-5 px-4">
        <div class="col-md-5 mx-auto">
            <div class="shadow rounded overflow-hidden">
                <div class="px-4 pt-0 pb-4 cover">
                    <div class="media align-items-end profile-head">
                        <div class="profile mr-3"><img src="../images/user.png" alt="..."  class="rounded mb-2 img-thumbnail">
                        </div>
                        <div class="media-body mb-5 text-white">
                            <h4 class="mt-0 mb-0"><?= $profiles["first_name"] . " " . $profiles["last_name"];?></h4>
                            <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>New York</p>
                        </div>
                    </div>
                </div>
                <div class="bg-light p-4 d-flex justify-content-end text-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <h5 class="font-weight-bold mb-0 d-block">215</h5><small class="text-muted"> <i class="fas fa-image mr-1"></i>Photos</small>
                        </li>
                        <li class="list-inline-item">
                            <h5 class="font-weight-bold mb-0 d-block">745</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Followers</small>
                        </li>
                        <li class="list-inline-item">
                            <h5 class="font-weight-bold mb-0 d-block">340</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Following</small>
                        </li>
                    </ul>
                </div>
                <div class="px-4 py-3">
                    <h5 class="mb-0">About</h5>
                    <div class="p-4 rounded shadow-sm bg-light">
                        <p class="font-italic mb-0"><span>Date of birth: </span> <span> <?= $profiles["birthday"]?></span></p>
                        <p class="font-italic mb-0"><span>Gender: </span><span> <?= $profiles["gender"]?></span></p>
                        <p class="font-italic mb-0"><span>Family: </span><span> Single</span></p>
                    </div>
                </div>
                <div class="py-4 px-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="mb-0">Recent photos</h5><a href="#" class="btn btn-link text-muted">Show all</a>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-2 pr-lg-1"><img src="https://images.unsplash.com/photo-1469594292607-7bd90f8d3ba4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                        <div class="col-lg-6 mb-2 pl-lg-1"><img src="https://images.unsplash.com/photo-1493571716545-b559a19edd14?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                        <div class="col-lg-6 pr-lg-1 mb-2"><img src="https://images.unsplash.com/photo-1453791052107-5c843da62d97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                        <div class="col-lg-6 pl-lg-1"><img src="https://images.unsplash.com/photo-1475724017904-b712052c192a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- USER POST -->
<?php foreach($posts as $post):
        if (!empty($post["post_id"])):
        $getComments = getCommentById(); 
        ?>
        <div class="container-card" id="<?=$post["post_id"]?>">
            <div class="post-header">
                <div class="post-header-profile" style="display:flex">
                    <div class="user-profile">
                        <img src="../images/user.png" alt="" width="100%">
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
                    <li><a class="edit-post" href="edit_view.php?id=<?= $post['post_id'];?>"><i class='fas fa-user-edit' style='font-size:16px;color:blue'></i> Edit post</a></li>
                    <li><a class="delete-post" href="../controllers/delete_post.php?id=<?= $post['post_id'];?>"><i class='far fa-trash-alt' style='font-size:16px;color:red'></i> Remove</a></li>
                </div>
            </div>
            <div class="post-body" style="margin-top: 40px;">
                <div class="description">
                    <p><?= $post["description"]?></p>
                </div>
                <div class="image-posted" style="margin-bottom:10px">
                    <img src="../images/uploads/<?= $post["file_img"]?>" alt="" width="100%">
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
                <iframe src="" style="display:none;" name="fTarget" frameborder="0"></iframe>
                <form action="/controllers/count_like.php" class="like" target="fTarget" method="post">
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
                                            <a href="../controllers/edit_comm.php?id=<?= $comment['comment_id'];?>" id="edit">Edit</a>
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
                    <form action="../controllers/comment_post.php?id=<?= $post['post_id'];?>" class="input_comment"  method="POST">
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

<?php require_once("../templates/footer.php")?>