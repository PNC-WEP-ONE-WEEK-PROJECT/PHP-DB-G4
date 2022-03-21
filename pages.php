

<?php 
session_start();
if (isset($_SESSION['login']) && ($_SESSION['login']==true)){  
        header("location: index.php");
    }else{
        require_once("templates/login.php");
        require_once("views/login_view.php");
    }

?>

<?php require_once("templates/footer.php");