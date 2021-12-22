<?php include "./includes/header.php"?>

<!-- main section -->
<section class="main">

    <?php
    $total_price = 0;
    $user_id = $_SESSION["user_id"];
    $query = "SELECT * FROM basket Where user_id = '$user_id';";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $item_id = $row["item_id"];
            $price = $row["price"];
            $total_price += round($price) ;
            $img = $row["img"];
            $items_number = $row["items_number"];
            echo '
            <div class="card">
                <div class="image-box">
                    <img src="./static/images/'.$img.'" alt="">
                </div>
                <div class="content">
                    <p>it is a great custom</p>
                    <h2 class="cost">'.$price.'$</h2>
                </div>
            </div>
            ';
       }
    }
    else{
        echo "</section><div class='buy'><h1>you have no items in the basket yet!</h1></div>";
    }
    
    ?>   
    
    
    

</section>
<div class="buy">
    <a class="btn btn-buy" href="/mysite/buy.php">Buy(
        <?php
        echo $total_price;
        ?>$
    )
    </a>
    </div>
<?php include "./includes/footer.php"?>