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
              <li><img src="images/Cancel.png" alt="gallery" width="100%" ></li>
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
            <textarea name="description" class= "title" placeholder="What's your mind?" spellcheck="false" required></textarea>
            <div class="add-gallery">
              </div>
              <div class="options">
                  <div class="add-icon">
                    <input type="file" name="uploadimg" id="click_img">
                    <!-- <img src="../images/add-photo.png" alt="gallery" width=100%> -->
                  </div>
                  <p>Photo</p>
            </div>
            <button id="sum_post" type="submit" name="submit">Post</button>
          </form>
        </section>
      </div>
    </div>
