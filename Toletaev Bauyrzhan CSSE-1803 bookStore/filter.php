<!DOCTYPE html>
<html>
<head>
    <title>Education</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:10px">
    <div class="w3-bar w3-black  ">
        <a href="bookstore.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-vk"></i></a>
        <a href="bookstore.php" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
    </div>
    <div class="container mb-3">
        <h1 class="text-center"> Введите ваши данные</h1>
        <form action="" method="post">
            <div class="row mt-5 ">
                <div class="col-6 display-4">
                    <div class="form-group">
                        <label for="name" class="btn-outline-dark  font-weight-bold " style="font-size: 22px">От:</label>
                        <input style="margin-left: 44px" type="text" name="name" id="name" class="form-control"></div>
                    <div class="form-group">
                        <label for="surname" class="btn-outline-dark  font-weight-bold " style="font-size: 22px">До:</label>
                        <input style="margin-left: 42px" type="text" name="author" id="surname" class="form-control">
                    </div>
                    <button type="submit" style="background: #1b1e21;border-radius: 10px;color: white;width: 100px;margin: 5px 0 0 0;position: absolute">Go</button>
                </div>
            </div>
        </form>
    </div>
    <hr>
    <hr>
    <div class="w3-row w3-grayscale">
        <?php
        if(!empty($_POST['name']) or !empty($_POST['author'] )){
            require_once "connection.php";
            $name = $_POST['name'];
            $author = $_POST['author'];
            if(empty($_POST['name'])) {
                $_POST['name']=0;
            }
            if(empty($_POST['author'])) {
                $_POST['author']=10000000000;
            }
            $query = $pdo_conn->query("SELECT * FROM `all_book` WHERE `cost` BETWEEN $name AND $author ");
            if($query!=null) {
                foreach( $query  as $row)
                {
                    ?>
                    <div class="w3-col l3 s6">
                        <div class="w3-container">
                            <img src="<?php echo($row['picture'])?>" class="card-img-top" alt="..." style="height: 250px;width: 100%">
                            <p><?php echo($row['name'])?></p>
                            <h6><?php echo($row['cost'])?>$</h6>
                        </div>
                    </div>
                    <?php
                }}
            else {
                echo "erverv";
            }
            $pdo_conn = null;
        }
        ?>
    </div>
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