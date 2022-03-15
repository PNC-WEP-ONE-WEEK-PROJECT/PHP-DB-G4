<?php
/**
 * Your code here
 */
require_once ("templates/header.php");
?>
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><img src="images/icon-facebook.webp" alt="" width="5%"></a>
        </div>
        <div class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Friends</a></li>
        </div>      
        <div class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </div>
    </div>
</nav>
<?php
require_once ("templates/footer.php");
?>