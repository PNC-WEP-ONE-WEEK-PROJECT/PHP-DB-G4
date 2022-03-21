
<!-- header -->
<nav class="navbar opacity">
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
                <div class="user_profile"><a href="views/view_profile.php" ><img src="../images/user.png" alt="" width=" 100%"></a> <span ><?=$FirstName?></span></div>
                <li class="cicle-user"><a href="#" ><i class="fa fa-caret-down" style="font-size:20px"></i></a></li>
            </div>
        </div>
  </nav>

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
