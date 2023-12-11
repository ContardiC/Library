<?php
$server = 'localhost';                  // Server su cui si trova il database
$db = 'library';                        // Nome del database
$port = '8889';                         // Porta del servizio
$username = 'root';                     // Nome utente
$password = 'root';                     // Password

$conn = new mysqli($server,$username,$password,$db,$port);
if($conn->error){
    echo "Non è possibile connettersi al database " . $conn->error;
}else{
    // solo test
    // echo "Connesso al database";
}

?>