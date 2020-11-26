<!DOCTYPE html>
<html>
<title>bookstore</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<style>
    .w3-sidebar a {font-family: "Roboto", sans-serif}
    body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<div class="w3-content" style="max-width:1200px">
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
    <div class="w3-container w3-display-container w3-padding-16">
        <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
        <h3 class="w3-wide"><b>BookStore</b></h3>
    </div>
    <div class="w3-padding-64 w3-large w3-text-black" style="font-weight:bold">
        <a href="education.php" class="w3-bar-item w3-button">Education</a>
        <a href="medicine.php" class="w3-bar-item w3-button">Medicine</a>
        <a href="engineering.php" class="w3-bar-item w3-button">Engineering</a>
        <a href="Literature.php" class="w3-bar-item w3-button">Literature</a>
        <a href="baby.php" class="w3-bar-item w3-button">Baby</a>
    </div>
    <a href="contacts.php" class="w3-bar-item w3-button w3-padding">Contact</a>
    <a href="admin.php" class="w3-bar-item w3-button w3-padding">Admin</a>
    <a href="registration.php" class="w3-bar-item w3-button w3-padding">Sin in</a>
</nav>
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
    <div class="w3-bar-item w3-padding-24 w3-wide">BookStore</div>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<div class="w3-main" style="margin-left:250px">
    <div class="w3-hide-large" style="margin-top:83px"></div>
    <header class="w3-container w3-xlarge">
        <p class="w3-left">Home</p>
        <p class="w3-right">
            <a class="text-dark" href="search.php" aria-label="Search">
            <i class="fa fa-search" ></i>
            </a>
        </p>
    </header>
    <div class="w3-display-container w3-container">
        <img src="Zhongshuge-уникальный-книжный-магазин-4.jpg" height="400" style="width: 100%"/>
        <div class="w3-display-topleft w3-text-white" style="padding:16px 32px">
            <h5 class="w3-jumbo w3-hide-small" style="color: silver; margin-top: 110px; margin-left: 10px">Welcome to our bookstore!</h5>
     </div>
    </div>
    <hr>

    <hr>
    <div class="w3-row w3-grayscale">
    <?php

        $_asc_desc="SELECT * FROM all_book ORDER BY cost ASC";

    require_once "connection.php";
    $g_row =  $pdo_conn->query($_asc_desc) ;
    foreach($g_row as $row)
    { ?>
                <div class="w3-col l3 s6">
                    <div class="w3-container">
            <img src="<?php echo($row['picture'])?>" class="card-img-top" alt="..." style="height: 250px;width: 100%">
        <p><?php echo($row['name'])?></p>
        <h6><?php echo($row['cost'])?>$</h6>
    </div>
</div>
    <?php }
    ?>
</div>
<hr>
<footer class="w3-row-padding w3-padding-32" style="background-color: silver">
    <div class="w3-third">
        <h4>Footer</h4>
        <p>Designed and built with all the love in the world using Bootstrap.</p>
        <p>Powered by <a href="#" target="_blank">bookStore</a></p>
    </div>
    <div class="w3-third">
        <h4>About</h4>
        <p><a href="#">About us</a></p>
        <p><a href="#">We're hiring</a></p>
        <p><a href="#">Support</a></p>
        <p><a href="#">Return</a></p>
        <p><a href="#">Help</a></p>
    </div>
    <div class="w3-third">
        <h4>Store</h4>
        <p><i class="fa fa-fw fa-map-marker"></i>Book Store</p>
        <p><i class="fa fa-fw fa-phone"></i> 87004546123</p>
        <p><i class="fa fa-fw fa-envelope"></i> book@mail.com</p>
        <h4>We accept</h4>
        <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
        <br>
        <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
        <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
        <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
        <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
        <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
    </div>
</footer>
</div>
<script>
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }
    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }
</script>
</div>
</body>
</html>