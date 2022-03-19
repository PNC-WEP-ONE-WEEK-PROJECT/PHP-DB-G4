

<?php
// <!-- INCLUDES HEADER -->
require_once "Includes/header.php";
require_once "models/item.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['user_email']) && !empty($_POST['user_password'])){
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];
    $user = get_users($email, $password);
}
?>
<?php if(empty($user)){
    echo '<script>alert("Check your email and password again")</script>';
}else{
    $none = "none";
    $flex = "flex";
}
?>
<div class="confirm_contianer <?=$flex?>">
    <a href="../index.php?id=<?= $user["id"]?>"><button>Click Countinoues</button></a>
</div>

<!-- MAIN -----------------------------------------  -->
<div class="container <?=$none?>">
    <h2>facebook</h2>
    <div class="container-form">
        <form action="#" method="post">
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

<!-- INCLUDES FOOTER -->

<?php
require_once ("Includes/footer.php");
