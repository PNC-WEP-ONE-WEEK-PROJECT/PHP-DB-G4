<?php
/**
 * Your code here
 */
require_once ("templates/header.php");
?>
    <!-- navbar on header  -->
<nav class="navbar">
    <div class="container-fluid">
        <!-- LOGO FB -->
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><img src="images/icon-facebook.webp" alt="" width="30%"></a>
        </div>
        <!-- page home and group -->
        <div class="nav_pages">
            <li><a href="#"><i class="fa fa-home" style="font-size:30px"></i></a></li>
            <li><a href="#"><i class="fa fa-group" style="font-size:30px"></i></a></li>
        </div>      
        <!-- ICON USER NAME -->
        <div class="nav_icons">
            <li class="cicle-user"><a href="#" ><i class="fa fa-user" style="font-size:30px"></i></a></li>
            <li class="cicle-user"><a href="#" ><i class="fa fa-caret-down" style="font-size:30px"></i></a></li>
        </div>
    </div>
</nav>
<?php
require_once ("templates/footer.php");
?>