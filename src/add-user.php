<?php
include '../config/database-connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //TODO: sanificare le stringhe
    
    $nome = ucfirst(strtolower($_POST['nome']));
    $cognome = ucfirst(strtolower($_POST['cognome']));
    $email = strtolower($_POST['email']);
    $password = md5($_POST['password']);

    // echo "$nome $cognome $email $password";
    $sql = "SELECT email FROM utenti WHERE email LIKE '$email'";

    $res = $conn->query($sql);
    if($res->num_rows == 0){
        $sql = "INSERT INTO utenti(nome, cognome, email, password)
        VALUES('$nome','$cognome','$email','$password')";
    
        if ($conn->query($sql) === TRUE) {
            header("Location: ../public/login.php");
            exit;
        } else {
            echo "Errore " . $conn->error;
        }
    }else{
        //TODO: gestire utente già presente
    }

  
    $conn->close();
}
