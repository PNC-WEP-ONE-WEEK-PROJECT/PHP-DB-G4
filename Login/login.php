<?php
// <!-- INCLUDES HEADER -->
require_once "Includes/header.php";
$db = new PDO("mysql:host=localhost;dbname=facebook_pnc", "root", "");


if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['username']) && !empty($_POST['message'])) :
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];

    echo $email,$password;
    $statement = $db->prepare("SELECT * FROM users where email:user_mail and password:user_password;");
    $statement->execute([
        ':user_mail' => $email,
        ':user_password' => $password
    ]);
endif;

?>


<!-- MAIN -----------------------------------------  -->
<div class="container">
    <h2>facebook</h2>
    <div class="container-form">
        <form action="" method="post">
            <h3>Log Into Facebook</h3>
            <div class="input-group">
                <div class="message">Incorrect email or password!</div>
                <div class="input">
                    <label><i class="material-icons">email</i></label>
                    <input type="text" name="user_email" id="email" placeholder="Your email..."></input>
                </div>
                <div class="input">
                    <label><i class= "fa fa-lock"></i></label>
                    <input type="password" name ="user_password" id="password" placeholder="Your password... ">
                <div class="show"><i class="fa fa-eye"></i></div></input>
                </div>
                <button class="btn-submit" type="submit">Log In</button>
            </div>
        </form>
        <li>
            <a href="#">Create new account?</a>
        </li>
    </div>
</div>
// <!-- INCLUDES FOOTER -->

<?php
require_once "Includes/footer.php";
