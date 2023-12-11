<?php
session_start();
include '../includes/header.php';
if(isset($_SESSION['logged']) && $_SESSION['logged'] === TRUE){
    echo "ok sei loggato";
}else{
    echo "Tu non puoi passare - Cit. Gandalf";
}
?>






<?php
include '../includes/footer.php';
?>