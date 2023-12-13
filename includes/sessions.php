<?php
session_start();

$logged_in = $_SESSION['logged_in'] ?? false;

function require_login($logged_in)
{
    if ($logged_in === false) {
        header("Location: login.php");
        exit;
    }
}

function login($email)
{
    session_regenerate_id(true); // aggiorno l'id della sessione
    $_SESSION['logged_in'] = true;
    $_SESSION['email'] = $email;
}
function logout()
{
    $_SESSION = [];      // elimino contenuto dell'array
    $params = session_get_cookie_params(); // leggo i parametri del cookie di sessione
    setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
    session_destroy();
}
