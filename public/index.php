<?php
session_start();
include '../includes/header.php';
if(isset($_SESSION['logged']) && $_SESSION['logged'] === TRUE){
    include '../includes/navbar.php';
}else{
    echo "Tu non puoi passare - Cit. Gandalf";
}
include '../includes/footer.php';
?>






<?php
include '../includes/footer.php';
?>