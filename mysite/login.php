<?php include "./includes/header.php"?>

<section class="signup">
    <?php
        if(isset($_GET["success"])){
            if ($_GET["success"] == "yes"){
                echo "<div class='flash success'>account is created successfully!</div>";
            }
        }
    ?>

    <h1>login here</h1>
    <form action="/mysite/login.php" method="post">
        <label for="username">username</label>
        <input id="username" name="username" type="text" placeholder="username . . .">

        <label for="password">password</label>
        <input class="password" name="pwd" type="password" placeholder="password . . .">
        <button class="btn btn-signup" type="submit">Login</button>
    </form>
    <h2><span><a class="link" href="/mysite/signup.php">signup</a></span> if you don't have an account</h2>
</section>
<?php
if(isset($_POST['username']) && isset($_POST["pwd"])){
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $query = "SELECT * FROM users Where username = '$username' AND pwd = '$pwd' ;";

    $result =  mysqli_query($conn, $query);

    if(mysqli_num_rows($result) >= 1){
        $raw = mysqli_fetch_assoc($result);
        $_SESSION["user"] = "$username";
        $_SESSION["user_id"] = $raw["user_id"];
        header('Location: '."/mysite/index.php");
    }
}
?>
<?php include "./includes/footer.php"?>
