<!DOCTYPE html>
<html>
<title>bookstore</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .w3-sidebar a {font-family: "Roboto", sans-serif}
    body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<div class="w3-content" style="max-width:1200px">
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
    <div class="w3-main" ">
    <div class="w3-hide-large" style="margin-top:83px"></div>
    <header class="w3-container w3-xlarge">
        <p class="w3-left">Add New Book++</p>
        <p class="w3-right">
        <a type="button" href="bookstore.php" style="color: black"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-door-closed-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4 1a1 1 0 0 0-1 1v13H1.5a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2a1 1 0 0 0-1-1H4zm2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
            </svg></a>
        </p>
    </header>
    <form action = "" method="post">
        <div style="margin-left: 50px">
            <label for="3">NAME:</label><br>
            <input size="62px" type="text" name = "name"  id="3"><br>
            <label  for="12">Author:</label><br>
            <input size="62px"   type="text" name = "author"  id="12"><br>
            <label  for="11">Cost:</label><br>
            <input   size="62px" type="text" name = "cost"  id="11"><br>
            <label  for="13">Picture url:</label><br>
            <input   size="62px" type="text" name = "url"  id="13">
            <div style="margin-top: 20px">
                <button type="submit" style="background: black;color: white" class="btn btn-primary">SAVE</button>
            </div>
        </div>
    </form>
    <hr>
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
<?php
if(!empty($_POST['name'])) {
    require_once "connection.php";
    $sql = "insert into all_book (name, author_name, cost, picture) values (:pn, :mn, :sn, :ps)";
    $pnn = $_POST['name'];
    $mnn = $_POST['author'];
    $snn = $_POST['cost'];
    $pss = $_POST['url'];
    $r = $pdo_conn->prepare($sql);
    $r->bindParam(':pn', $pnn);
    $r->bindParam(':mn', $mnn);
    $r->bindParam(':sn', $snn);
    $r->bindParam(':ps', $pss);
    if ($r->execute()==true)
    {
        header("Location: profile.php");
    }
    else
        Echo "erorr";
}
?>
<script>
    // Script to open and close sidebar
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