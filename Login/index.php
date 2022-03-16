<?php
// <!-- INCLUDES HEADER -->
require_once "Includes/header.php";
if (!empty($_POST["email"])){

    $get_email = $_POST["email"];
    echo $get_email;
} else {
    echo "<script>document.querySelector('.message').style.display='block';<script>";
}
?>


<!-- MAIN -----------------------------------------  -->
<div class="container">
    <h2>facebook</h2>
    <div class="container-form">
        <form action="#" method="post">
            <h3>Log Into Facebook</h3>
            <div class="input-group">
                <div class="message">Incorrect email or password!</div>
                <div class="input">
                    <label><i class="material-icons">email</i></label>
                    <input type="text" name="email" id="email" placeholder="Your email..."></input>
                </div>
                <div class="input">
                    <label><i class= "fa fa-lock"></i></label>
                    <input type="password" name ="password" id="password" placeholder="Your password... ">
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
