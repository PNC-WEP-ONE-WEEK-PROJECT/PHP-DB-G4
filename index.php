<?php
/**
 * Your code here
 */
require_once ("templates/header.php");
require_once ("models/database.php");
?>
 

<!-- header -->
<nav class="navbar">
    <div class="container-fluid">
        <!-- LOGO FB -->
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><img src="images/icon-facebook.webp" alt="" width="25%"></a>
        </div>
        <!-- page home and group -->
        <div class="nav_pages">
            <li class="active"><a href="#"><i class="fa fa-home" style="font-size:25px"></i></a></li>
            <li><a href="#"><i class="fa fa-group" style="font-size:22px"></i></a></li>
        </div>      
        <!-- ICON USER NAME -->
        <div class="nav_icons">
            <li class="d-flex"> <span class="cicle-user"><a href="#" ><i class="fa fa-user" style="font-size:20px"></i></a></span> <span><?= $user["first_name"] . " " . $user["last_name"];?> </span></li>
            <li class="cicle-user"><a href="#" ><i class="fa fa-caret-down" style="font-size:20px"></i></a></li>
        </div>
    </div>
</nav>
<!-- user post -->
<div class="container-card">
        <div class="card-header">
            <img src="images/icon-facebook.webp" alt="" width="10%">
            <span class="add-post">What's on your mind?</span>
        </div>
        <hr>
        <div class="card-body">
            <div class="btn photo">
                <img src="images/photo.png" alt="" width="20%">
                <span>Photo/Video</span>
            </div>
            <div class="btn feeling">
                <img src="images/Happy.png" alt=""width="20%">
                <span>Feeling</span>
            </div>
        </div>
</div>

<!-- contain user post -->
<div class="container-card">
        <div class="card-header post-header">
            <div class="card-header">
            <img src="images/icon-facebook.webp" alt="" width="10%">
            <div class="name">
                <h3 class="user_name"><?= $user["first_name"] . " " . $user["last_name"];?> </h3>
                <p class="post_time">Just now</p>
            </div>
            </div>
            <div class="card-header-icon">
                <div class="icon">
                    <i class="fa fa-ellipsis-h"></i>
                </div>
            </div>
        </div>
        <div class="post-body">
            <div class="description">
                <p class="description">description...</p>
            </div>
            <div class="image-posted">
                <img src="images/image-1.jpg" alt="" width="100%">
            </div>
        </div>
        <div class="post-footer">
            <div class="like">
                <p>Like</p>
            </div>
            <div class="comment">
                <p>Comment</p>
            </div>
        </div>
</div>
<?php
require_once ("templates/footer.php");
?>