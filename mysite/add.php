<?php
include "./includes/header.php";
?>




<!-- basket_id	user_id	item_id	price	img	items_number -->

<?php
    if(isset($_SESSION["user"]) && isset($_GET["item"]) && isset($_GET["price"]) && isset($_GET["img"])){
        $user_id = $_SESSION["user_id"];
        $item = $_GET['item'];
        $price = $_GET['price'];
        $location = $_GET['location'];
        $img =$location.'/'. $_GET['img'].".png";
        $query = "INSERT INTO basket ( user_id ,item_id,price,img,items_number) VALUES('$user_id','$item','$price','$img','1')";

        if (mysqli_query($conn, $query)) {
            header('Location: '."/mysite"."/".$location.".php");
        } 
        else {
            header('Location: '."/mysite/login.php");
        }
    }
    else {
        header('Location: '."/mysite/login.php");
    }
?>






<?php
include "./includes/footer.php";
?>