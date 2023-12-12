<?php
session_start();
$logged_in = $_SESSION['logged_in'] ?? false;

function login($email){
    session_regenerate_id(true); // aggiorno l'id della sessione
    $_SESSION['logged_in'] = true;
    $_SESSION['email'] = $email;
}



?>