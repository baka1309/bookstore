<!DOCTYPE html>
<html>
<title>users</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body class="w3-light-grey">
<div class="w3-bar w3-black  ">
    <a href="bookstore.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a>
    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-vk"></i></a>
    <a href="bookstore.php" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
</div>
<header class="w3-container w3-xlarge" style="margin-top: 150px">
    <p class="w3-center">Login to the system</p>
</header>
<div class="parent">
    <div class="w3-col s4">.</div>
    <div class="w3-col s4 ">
        <form action="" method="post">
            <p><input class="w3-input w3-border" type="text" placeholder="name" name="email" required></p>
            <p><input class="w3-input w3-border" type="password" placeholder="password" name="password" required></p>
            <button type="submit" class="w3-button w3-block w3-black">Ok</button>
        </form>
    </div>
    <div class="w3-col s4"></div>
</div>
<?php
if(!empty($_POST['email']) and !empty($_POST['password'])) {
    require_once "connection.php";
    $g_row =  $pdo_conn->query("SELECT * FROM users") ;
    $bool = false;
    $id_user=0;
    foreach($g_row as $row)
    {
        if($row['login']==$_POST['email'] AND $row['password']==$_POST['password']) {

            $bool=true;
            $id_user=$row['user_id'];
        }

    }
    if($bool) {
        setcookie("current_user",$id_user,time()+3600);
        header("Location: User.php");
    }
    else {
        echo "<h1 style='color: #ff0000'>Error login or password try again!</h1>";
    }
}
?>
</body>
</html>