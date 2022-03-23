<?php
session_start();

if (!isset($_SESSION['login'])){
    header("location: pages.php");
    exit;
}
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
// Get user_profile image from database
$get_image = profile_user();
// $user_image = "user-profile-icon.png";
// if (!empty($get_image["image"])){
//     $user_image = $get_image["image"];
// }

require_once("views/post_view.php");
?>

<nav class="navbar_facebook opacity">
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
                <div class="user_profile"><a href="views/profile.php" ><img src="images/uploads/<?=$get_image["image"] ?>" alt="" width=" 100%"></a> <span ><?=$FirstName?></span></div>
                <a href="views/logout.php"><img src="images/log-out.png" alt="" width="10%">Sign Out</a>
            </div>
        </div>
  </nav>


<!-- PART OF POSTS -->
<div class="container-card opacity">
    <div class="card-header">
        <div class="profile">
            <a href="../views/profile.php"><img src="images/uploads/<?=$get_image["image"] ?>" alt="" width="100%"></a>
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
    <?php require_once("views/status_view.php")?>
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