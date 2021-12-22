<?php
   session_start();
?>
<?php include "./connection.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./static/css/style.css">
</head>
<body>
    <header>
        <div class="brand">
            <h1><a href="/mysite/index.php">Bano Shop</a> </h1>
        </div>
        <nav>
            <ul>
                <li><a id="clothes" href="/mysite/clothes.php">Clothes</a></li>
                <li><a id="watches" href="/mysite/watches.php">Watches</a></li>
                <li><a id="shoes" href="/mysite/shoes.php">Shoes</a></li>
            </ul>
        </nav>
        <div class="register">
            <?php
            if(!isset($_SESSION["user"])){
            ?>
                <a class="btn btn-signup" href="/mysite/signup.php">Sign up</a>
                <a class="btn btn-login" href="/mysite/login.php">Login</a>
            <?php
            }
            else{
                $user_id = $_SESSION["user_id"];
                $query = "SELECT count(*) FROM basket Where user_id = '$user_id';";
                $result = mysqli_query($conn,$query);
                $data = mysqli_fetch_assoc($result);

               echo '<a href="/mysite/basket.php">'.$_SESSION["user"].' basket('. $data["count(*)"] .')</a>';
                echo '<a class="btn btn-add" href="/mysite/logout.php">Logout</a>';
                }
            ?>
        </div>
    </header>
  