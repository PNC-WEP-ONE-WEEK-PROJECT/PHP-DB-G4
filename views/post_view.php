<?php

$db = new PDO("mysql:host=localhost;dbname=facebook_pnc", "root", "");
$user_statement = $db->query("SELECT id, first_name, last_name FROM users limit 1;");
$user = $user_statement -> fetch();
?>
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
                <input type="hidden" value="<?=$user["id"];?>" name="user_id">
                <p><?= $user["first_name"]." ". $user["last_name"];?></p>
      
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
