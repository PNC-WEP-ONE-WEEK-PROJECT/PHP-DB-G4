<?php
/**
 * Your code here
 */
require_once ("templates/header.php");
require_once("post/index.php");
?>
 <!-- user post -->
 <div class="container-card opacity">
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


<?php

require_once("views/post_view.php");
require_once ("templates/footer.php");
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