<?php
/**
 * Your code here
 */
require_once ("templates/header.php");
?>
    <!-- navbar on header  -->
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
            <li class="d-flex"> <span class="cicle-user"><a href="#" ><i class="fa fa-user" style="font-size:20px"></i></a></span> <span>username</span></li>
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
<?php
require_once ("templates/footer.php");
?>