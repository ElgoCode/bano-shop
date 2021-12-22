<?php
include "./includes/header.php";
?>

<?php
    $user_id = $_SESSION["user_id"];
    $query = "DELETE FROM basket WHERE user_id = '$user_id';";

    if (mysqli_query($conn, $query)) {
        header('Location: '."/mysite/index.php?buy=success");
    } 
    else {
        header('Location: '."/mysite/login.php");
    }

?>


<?php
include "./includes/footer.php";
?>