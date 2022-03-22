
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
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="rounded overflow-hidden">
                <div class="px-4 pt-0 pb-4 cover">
                    <div class="profile-head">
                        <div class="profile"><img src="../images/uploads/sauth.jpg" alt="..." ></div>
                        <div class="media-body text-white">
                        <i class="fa-light fa-circle-camera"></i>
                            <h4 class="mt-0 mb-0"><?= $profiles["first_name"] . " " . $profiles["last_name"];?></h4>
                            <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>New York</p>
                        </div>
                    </div>
                </div>
                <div class="contianer_prof">
                  <div class="about">
                        <h5 class="mb-0">About</h5>
                        <div class="shadow-sm">
                            <p class="font-italic mb-0"><span>Date of birth: </span> <span> <?= $profiles["birthday"]?></span></p>
                            <p class="font-italic mb-0"><span>Gender: </span><span> <?= $profiles["gender"]?></span></p>
                            <p class="font-italic mb-0"><span>Status: </span><span> Single</span></p>
                        </div>
                    </div>
                    <div class="conection">
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
                 
                </div>
            </div>
        </div>
    </div>

<!-- footer -->
<div class="mt-5 mb-5 text-center" style="text-align: center;margin:30px 0;">
    <footer>
        <small>Facebook version 2.0 Created by Mr.Tim and Mr.Sauth</small><br>
        <small>Database and PHP Project</small>
    </footer>
<?php require_once("../templates/footer.php")?>