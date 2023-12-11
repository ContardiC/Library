<?php
session_start();
if($_SERVER['REQUEST_METHOD']== 'POST'){
    
    //TODO: sanificare le stringhe
    $email = strtolower($_POST['email']);
    $password = md5($_POST['password']);
    
}


?>