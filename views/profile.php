
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

<nav class="navbar_facebook">
    <div class="container-fluid">
        <!-- LOGO FB -->
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><img src="../images/icon-facebook.webp" alt="" width="25%"></a>
        </div>
        <!-- HOME PAGE -->
        <div class="nav_pages">
            <a href="../index.php"> <li class="fa fa-home" style="font-size:25px"></li></a>
            <li class="fa fa-group" style="font-size:22px"></li>
        </div>      
        <!-- ICON USER NAME -->
        <div class="nav_icons">
            <div class="user_profile"><a href="" ><img src="../images/uploads/<?=$profiles["image"]?>" alt="" width=" 100%"></a> <span ><?=$FirstName?></span></div>
            <a href="logout.php"><img src="../images/log-out.png" alt="" width="10%"></a>
        </div>
    </div>
</nav>


<!-- BOOSTTRAP STYLE -->


<!-- 
  UPLOAND IMAGES -->
<div id="show_hide_profile">
            <!-- IMG PROFILE -->
    <img src= "" alt="" id="image-cover">
    <div class="profile-head">
        <div class="profile">
            <img src="../images/uploads/<?= $profiles["image"]?>" alt="">
            <div class="upload-profile"  onclick="create_profile()" style="cursor:pointer">
                <img src="../images/camera.png" alt="" width="100%">
            </div>
            <h2 class="user-name" ><?= $profiles["first_name"] . " " . $profiles["last_name"];?></h2>
        </div>
    </div>
    <label class="add-cover"  onclick ="check_list()">
        <div><img src="../images/camera.png" alt="" width="20%">Add cover profile</div>
    </label>
    <div class="list-cover"​ style="display:none" >
        <li><img src="../images/Picture.png" alt="" width="8%"> Select Photo</li>
        <input type="file" name="upload_img_profile" style="display:none" id= "cover">
        <label for= "cover"><li><img src="../images/upload.png" alt="" width="8%" > Upload Photo</li></label>
    </div>
</div>
<div id ="content-profile"  style="display:none">
    <div class="contianer_uplaod_profile">
        <form action="../controllers/upload_profile.php" method="post" enctype="multipart/form-data">
            <input type="hidden" value="<?=$user_id?>" name="id">
            <div class="cancel-post" onclick="No_uploand()">
                <li><img src="../images/Cancel.png" alt="gallery" width="80%" ></li>
            </div>
            <div class="user-upload">
                <textarea name="title" class= "title_profile" placeholder="What's your mind?" spellcheck="false" style="font-size:16px"></textarea>
                <label for="clicke_on_img">
                    <div class="options add-icon" >
                        <img src="" alt="" id="image_upload" width="100%">
                        <input type="file" name="upload_img_profile" onchange="upload_profile(event)" id="clicke_on_img" style="display:none">
                        <div class="add-image">
                        <img src="../images/add-photo.png" alt="" width= "10%"> <br> Choose Photo 
                        </div>
                    </div>
                    <button id="upload_img_profile" type="submit" name="submit">Save</button>
                </label>
            </div> 
        </form>
    </div>
</div>
<div class="container-profile" style="margin-top: 10%">
    <div class="contianer_information">
        <div class="about">
            <h5>About</h5>
            <div class="shadow-sm">
                <p class="font-italic mb-0"><span>Email: </span><span> <?= $profiles["email"]?></span></p>
                <p class="font-italic mb-0"><span>Date of birth: </span> <span> <?= $profiles["birthday"]?></span></p>
                <p class="font-italic mb-0"><span>Gender: </span><span> <?= $profiles["gender"]?></span></p>
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


<script>
    

    let add_contianer_post=document.querySelector("#content-profile");
    function No_uploand(){
        let cancel_post = document.querySelector("#content-profile");
        document.body.style.overflow="visible";
        hide(cancel_post);
    }


    function show(element){
        element.style.display = "block";
    }

    function hide(element){
        element.style.display = "none";
    }

    // CREATE POST---------------------------------------------------------------
 
    function create_profile(){
        if (add_contianer_post.style.display== "none"){
            document.body.style.overflow="hidden";
            show(add_contianer_post);
        }
    }


        var upload_profile = function(event){
        var image = document.getElementById("image_upload");
        image.src = URL.createObjectURL(event.target.files[0]);
        }

        

        let list = document.querySelector(".list-cover");
        function check_list(){
            show(list);
        }

        const image_input = document.querySelector("#cover");
        image_input.addEventListener("change", function() {
        const reader = new FileReader();
        reader.addEventListener("load", () => {
            const uploaded_image = reader.result;
            document.querySelector("#show_hide_profile").style.backgroundImage = `url(${uploaded_image})`;
        });
        reader.readAsDataURL(this.files[0]);
        hide(list)
        });
</script>
    

<?php

require_once ("../templates/footer.php");