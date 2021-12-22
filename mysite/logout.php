<?php
include "./includes/header.php";
session_destroy();
header('Location: '."/mysite/login.php");
include "./includes/header.php"
?>