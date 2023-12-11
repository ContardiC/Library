<?php
include './config/database-connection.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // echo "$nome $cognome $email $password";

    $sql = "INSERT INTO utenti(nome,cognome, email, password) VALUES('$nome','$cognome','$email','$password')";

    if($conn->query($sql)=== true){
        echo 'Sei registrato :-) ';
    }else{
        echo $conn->error;
    }

}



?>