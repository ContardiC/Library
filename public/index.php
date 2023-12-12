<?php
include '../includes/sessions.php';
include '../includes/header.php';
if(isset($_SESSION['logged']) && $_SESSION['logged'] === TRUE){
    include '../includes/navbar.php';
}else{
    header("Location: register.php");
}
include '../includes/footer.php';
?>






<?php
include '../includes/footer.php';
?>