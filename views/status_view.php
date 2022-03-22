

 <div class="container-card" id="<?=$post["post_id"]?>">
            <div class="post-header">
                <div class="post-header-profile" style="display:flex">
                    <div class="user-profile">
                        <a href="views/profile.php"><img src="images/uploads/<?=$user_image?>" alt="" width="100%"></a>
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
                    <li><a class="delete-post" href="controllers/delete_post.php?id=<?= $post['post_id'];?>"><i class='far fa-trash-alt' style='font-size:16px;color:red'></i> Remove</a></li>
                </div>
            </div>
            <div class="post-body" style="margin-top: 40px;">
                <div class="description">
                    <p><?= $post["description"]?></p>
                </div>
                <div class="image-posted" style="margin-bottom:10px">
                    <img src="images/uploads/<?php if(!empty($post["file_img"])){echo $post["file_img"];}?>" alt="" width="100%">
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
                        <span style="display:<?= $hide_like;?>" class="count_like" id="<?= $post['post_id'];?>"><?= $increment . " Likes"?></span>
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
                <form action="../controllers/count_like.php" class="like" target="fTarget" method="post">
                    <input type="hidden" value="<?= $user_id ?>" name="user_id">
                    <input type="hidden" value="<?= $post["post_id"]?>" name="post_id">
                    <button type="submit" id="<?= $post["post_id"]?>" class="btn_likes"><img src="images/like.png" alt="" width="30%"> <span>Like</span></button>
                </form>
                <div class="comment" >
                    <button class = "click_comment"  id="<?= $post['post_id'];?>"><i class='far fa-comment-alt' style='font-size:14px'></i> Comment</button>
                </div>
            </div>
            <!-- DISPLAY COMMENT -->
            <div class="container_comments">
                <a  class= "view_more" style="cursor:pointer">View all comments</a>
                <div class="show_all_comments" style="display:none">
                    <?php 
                    $getComments = array_reverse($getComments);
                    foreach($getComments as $comment):
                        if ($comment["post_id"] == $post['post_id']):
                        ?>
                            <div class="display_comment" >
                                <div class="user-profile">
                                    <img src="../images/uploads/<?=$user_image ?>" alt="" width="100%">
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
                                            <a class="edit_comment_post"  id="<?= $comment['comment_id'];?>">Edit</a>
                                        </div>
                                        <div class="delete_comm">
                                            <a href="../controllers/delete_comm.php?id=<?= $comment['comment_id'];?>" id="delete">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- EDIT COMMENT -->
                            <div class="edit_comment" style="display:none;margin-top:20px" id="<?= $comment['comment_id'];?>">
                                <div class="user-profile">
                                    <img src="../images/uploads/<?=$user_image ?>" alt="" width="100%">
                                </div>
                                <form action="controllers/edit_comment_post.php?id=<?= $comment['comment_id'];?>" class="input_comment"  method="POST">
                                    <input type="text" name="edit_comment" id="write_comment" required value="<?= $comment['comment'];?>">
                                    <button type="submit" class="send-comment"><i class="material-icons" style="color:#24a0ed;cursor:pointer">send</i></button>
                                </form>
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
                                    <img src="../images/uploads/<?=$user_image?>" alt="" width="100%">
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
                                        <a class="edit_comment_post"  id="<?= $comment['comment_id'];?>">Edit</a>
                                        </div>
                                        <div class="delete_comm">
                                            <a href="controllers/delete_comm.php?id=<?= $comment['comment_id'];?>" id="delete">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- EDIT COMMENT -->
                            <div class="edit_comment" style="display:none;margin-top:20px" id="<?= $comment['comment_id'];?>">
                                <div class="user-profile">
                                    <img src="images/uploads/<?=$user_image ?>" alt="" width="100%">
                                </div>
                                <form action="controllers/edit_comment_post.php?id=<?= $comment['comment_id'];?>" class="input_comment"  method="POST">
                                    <input type="text" placeholder="<?= $comment['comment'];?>" name="edit_comment" id="write_comment" required>
                                    
                                    <button type="submit" class="send-comment"><i class="material-icons" style="color:#24a0ed;cursor:pointer">send</i></button>
                                </form>
                            </div>
                        <?php endif ?>
                    <?php endforeach ?>

                <!--COMMENT POST -->
                <div class="comment_box" style="display:none;margin-top:20px" id="<?= $post['post_id'];?>">
                    <div class="user-profile">
                        <img src="../images/uploads/<?=$user_image ?>" alt="" width="100%">
                    </div>
                    <form action="controllers/comment_post.php?id=<?= $post['post_id'];?>" class="input_comment"  method="POST">
                        <input type="text" placeholder="Write a comment..." name="comment" id="write_comment" required>
                        <input type="hidden" name="user" value="<?= $user_id ?>">
                        <button type="submit" class="send-comment"><i class="material-icons" style="color:#24a0ed;cursor:pointer">send</i></button>
                    </form>
                </div>

            </div>
        </div>
      