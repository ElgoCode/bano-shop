<?php include "./includes/header.php"?>

<section class="signup">
    
    <h1>sign up here</h1>
    <form action="/mysite/signup.php" method="post">
        <label for="username">username</label>
        <input id="username" name="username" type="text" placeholder="username . . .">

        <label for="email">email</label>
        <input class="email" name="email" type="text" placeholder="email . . .">

        <label for="password">password</label>
        <input class="password" name="pwd" type="password" placeholder="password . . .">
        <button class="btn btn-signup" type="submit">Sign up</button>
    </form>
    <h2><span><a class="link" href="/mysite/login.php">login</a></span> if you already have an account</h2>
</section>
<?php
if(isset($_POST['username']) && isset($_POST["email"]) && isset($_POST["pwd"])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $query = "INSERT INTO users (username,email,pwd) VALUES('$username','$email','$pwd')";

    if (mysqli_query($conn, $query)) {
        header('Location: '."/mysite/login.php?success=yes");
    } 
    else {
        header('Location: '."/mysite/signup.php");
    }
}




?>
<?php include "./includes/footer.php"?>












