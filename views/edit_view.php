<?php
require_once('../templates/header.php');
require_once('../models/post.php');
   // TO DO:
   // Get the id of the item to update in query
$id = $_GET['id'];
$posts = getItemById($id);
?>

<div class="container" style="display:block">
    <div class="wrapper">
    <section class="post">
        <form action="../controllers/edit_post.php" method="post">
        <input type="hidden" value="<?php echo $id;?>" name="id">
        <header class="create-post-header" style="display:flex">
        <h2>Update post</h2>
        <div class="cancel-post" onclick= "cancel_post()">
            <li><img src="../images/Cancel.png" alt="gallery" width="100%" ></li>
        </div>
        </header>
        <hr>
        <form action="models/post.php" method="post" id ="update">
        <div class="content">
            <img src="../images/user.png" alt="logo" class="icon_user">
            <div class="details">
            <p><?= $user["first_name"]." ". $user["last_name"];?></p>
            <div class="privacy">
                <i class="fas fa-user-friends"></i>
                <span> Friends</span>
                <i class="fas fa-caret-down"></i>
            </div>
            </div>
        </div>
        <div class="update_post">
            <textarea name="description" class= "title" placeholder="<?= $posts["description"];?>" spellcheck="false" required></textarea>
            <!-- <div class="add-gallery">
                </div>
                -->
            <div class="options">
                <img src="../images/uploads/<?= $posts["file_img"]?>" alt="" width="100%">
                    <!-- <div class="add-icon">
                    <img src="../images/add-photo.png" alt="gallery" width=100%>
                    </div>
                    <p>Add photos</p> -->
            </div>
        </div>
            <button type="submit" name="submit">Update</button>
        </form>
    </section>
    </div>
</div>
<?php
require_once('../templates/footer.php');
?>
