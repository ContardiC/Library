<?php
include '../config/database-connection.php';
session_start();
if($_SERVER['REQUEST_METHOD']== 'POST'){
    
    //TODO: sanificare le stringhe
    
    $email = strtolower($_POST['email']);
    $password = md5($_POST['password']);

    $sql = "SELECT email, password FROM utenti";
    $res = $conn->query($sql);
    if($res->num_rows>0){
        $_SESSION['logged'] = TRUE;
        $_SESSION['email'] = $email;
        header("Location: ../public/index.php");
    }else{
        
    }
}
?>