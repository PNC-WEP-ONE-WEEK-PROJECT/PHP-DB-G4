

<?php
// <!-- INCLUDES HEADER -->
require_once "Includes/header.php";
require_once "models/item.php";
if (isset($_POST["user_email"]) && isset($_POST["user_password"])){

    $_SESSION["email"]=$_POST["user_email"];
    $_SESSION["password"]=$_POST["user_password"];
    $email= $_SESSION["email"];
    $password = $_SESSION["password"];
    $user = get_users($email, $password);
}
?>

<?php if(!empty($user)){
    // echo '<script>alert("Check your email and password again")</script>';
    
    $none = "none";
    $flex = "flex";
}
?>
<div class="confirm_contianer <?=$flex?>">
    <a href="../controllers/controll_login.php?id=<?= $user["id"]?>"><button>Click Countinoues</button></a>
</div>

<!-- MAIN -----------------------------------------  -->
<div class="container">
    <!-- caption -->
    <div class="content w-50 px-5" style="text-align:left;">
        <h2 class="text-primary">facebook</h2>
        <p style="font-size:28px">Connect with friends and the world around you on Facebook.</p>
    </div>
    <div class="container-fluid p-3" style="background-color: #fff;box-shadow:1px 2px 8px 1px #aaa;border-radius:5px;width:36%">
        <form action="" method="post">
                <div class="col-12 text-center w-100">
                    <h3>Log In</h3>      
                </div>
                <hr mt-2 mb-2>
                <div class="mt-3">
                    <input type="email" class="form-control p-2 px-3" id="email" placeholder="Enter email" name="user_email">
                </div>
                <div class="mb-3 mt-3">
                    <input type="password" class="form-control p-2 px-3"  id="password" placeholder="Password" name="user_password">
                <div class="show" onclick="show_password()"><i class="fa fa-eye-slash"></i></div></input>
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary py-2" type="submit">Log In</button>
                </div>
        </form>
        <hr mt-2 mb-2>
        <div class="d-grid ds-flex m-auto w-50">
            <a class="btn btn-success py-2  " id="create">Create new account</a>
        </div>
    </div>
</div>


<div class="container_form_create">
    <!-- INCLUDES FOOTER -->
<form action="../../controllers/create_account.php" class="form_create" method="POST">
    <div class="shadow  m-auto mt-5  p-3 mb-5 bg-body rounded" style="width: 35%;">
        <div class="row ds-flex">
            <div class="col-6 w-50">
                <h1>Sign Up</h1>        
                <small>It's quick and easy</small>
            </div>
            <div class="col-6 w-50 p-0 m-0">
                <img src="../images/Multiply.png" alt="" class="cancel_create" width="20%">
            </div>
        </div>
        <hr mt-2 mb-2>
        <div class="row mt-4 w-100 m-auto">
            <div class="col-6 w-50">
                <span>First name</span>
                <input type="text" class="form-control" name="first-name" placeholder="First name.." aria-label="First name" required>
            </div>

            <div class="col-6 w-50">
                <span>Last name</span>
                <input type="text" class="form-control" name="last-name" placeholder="Last name.." aria-label="Last name" required>
            </div>
            <div class="col-6 mt-2">
                <span for="">Date of birth day</span>
                <input type="date" class="form-control" name="birthday"  aria-label="date of birth day" required>
            </div>
            <div class="col-6 mt-2">
                <span>Gender:</span>
                <br>
                <select class="form-select" aria-label="Default select example" name="gender">
                    <option disabled selected>Select gender</option>
                    <option value="F" >Female</option>
                    <option value="M">Male</option>
                </select>
            </div>
            <div class="col-12 mt-2">
                <span for="">Email address</span>
                <input type="email" class="form-control" name ="email" id="inputEmail4" placeholder="Email.." required>
            </div>

            <div class="col-12 mt-2">
                <span for="">Password</span>
                <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password.." required>
            </div>
            <div class="col-12 mt-2">
                <span for="">Confirmed password</span>
                <input type="password" class="form-control" name="comfirmpass" id="inputPassword4" placeholder="Password.." required>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary col-12 fw-bolder" >Sign up</button>
            </div>
        </div>    
    </div>
</form>
</div>
<?php
require_once ("Includes/footer.php");