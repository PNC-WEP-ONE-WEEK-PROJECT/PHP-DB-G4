<?php
/**
 * Your code here
 */
require_once ("templates/header.php");
?>
<!-- header -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><img src="images/icon-facebook.webp" alt="" width="5%"></a>
        </div>
        <div class="nav_pages">
            <li><a href="#">Home</a></li>
            <li><a href="#">Friends</a></li>
        </div>      
        <div class="nav_icons">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
<?php
require_once ("templates/footer.php");
?>