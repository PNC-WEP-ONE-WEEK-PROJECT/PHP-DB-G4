

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook 2.0</title>
    <!-- Your style here -->
    <!-- link to bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../images/icon-facebook.webp" type="image/x-icon">
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>

<?php 

$db = new PDO("mysql:host=localhost;dbname=facebook_pnc", "root", "");
$users = $db -> query("SELECT first_name, last_name FROM users limit 1");
$user = $users -> fetch();

$user_mind = "What is your mind?"
?>
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
                <li class="d-flex"> <span class="cicle-user"><a href="#" ><img src="../images/user.png" alt="" width=" 100%" ></a></span> <span><?= $user["first_name"] . " " . $user["last_name"] ;?> </span></li>
                <li class="cicle-user"><a href="#" ><i class="fa fa-caret-down" style="font-size:20px"></i></a></li>
            </div>
        </div>
    </nav>
    <div class="container-card opacity">
    <div class="card-header">
        <div class="profile">
            <img src="images/user.png" alt="" width="10%">
        </div>
        <span class="add-post" onclick="create_post()">What's your mind?</span>
    </div>
    <hr>
    <div class="card-body">
        <div class="btn photo"  onclick="create_post()">
            <img src="images/gallery.svg" alt="" width="100%">
            <span>Photo</span>
        </div>
        <div class="btn feeling"  onclick="create_post()">
            <img src="images/Happy.png" alt=""width="20%">
            <span >Feeling</span>
        </div>
    </div>
    </div>
   
