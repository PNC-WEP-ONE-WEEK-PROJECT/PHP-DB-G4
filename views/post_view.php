<?php

$db = new PDO("mysql:host=localhost;dbname=facebook_pnc", "root", "");
$user_statement = $db->query("SELECT first_name, last_name FROM users limit 1;");
$user = $user_statement -> fetch();
?>
    <div class="container" style="display:none">
      <div class="wrapper">
        <section class="post">
          <header>Create Post</header>
          <form action="models/post.php" method="post">
            <div class="content">
              <img src="images/user.png" alt="logo" class="icon_user">
              <div class="details">
                <p><?= $user["first_name"]." ". $user["last_name"];?></p>
                <div class="privacy">
                  <i class="fas fa-user-friends"></i>
                  <span>Friends</span>
                  <i class="fas fa-caret-down"></i>
                </div>
              </div>
            </div>
            <textarea name="title" placeholder="What's on your mind?" spellcheck="false" required></textarea>
            <div class="options">
              <p>Add to Your Post</p>
              <ul class="list">
                <li><img src="images/gallery.svg" alt="gallery"></li>
                <li><img src="images/more.svg" alt="gallery"></li>
              </ul>
            </div>
            <button type="submit" name="submit">Post</button>
          </form>
        </section>
      </div>
    </div>
