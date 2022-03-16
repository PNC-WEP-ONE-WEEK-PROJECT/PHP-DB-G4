<?php
/**
 * Your code here
 */

$db = new PDO("mysql:host=localhost;dbname=facebook_pnc", "root", "");
$users = $db -> query("SELECT id, first_name, last_name FROM users limit 1");
$user = $users -> fetch();

//  contain user post --
require_once("templates/header.php");
require_once("views/post_view.php");
?>

 <!-- user post -->

 <div class="container-card opacity">
        <div class="card-header post-header">
            <div class="card-header">
            <img src="images/icon-facebook.webp" alt="" width="10%">
            <div class="name">
            <input type="hidden" value="<?= $user["id"];?>" name="itemId">
                <h3 class="user_name"><?= $user["first_name"] . " " . $user["last_name"] ;?></h3>
                <p class="post_time">Just now <i class="fa fa-globe"></i></p>
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
                <p class="description"> discription</p>
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
<?php
require_once("templates/footer.php");
?>

<!-- SCRIP -->
<script>
    document.querySelector(".add-post").addEventListener("click", user_post)
    let add_contianer_post=document.querySelector(".container")
    let add_capacity = document.querySelectorAll(".opacity")
    function user_post(){
        add_contianer_post.style.display="inline"
    }
</script>


