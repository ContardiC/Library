<?php
define('DEV', true);                    // In sviluppo o online?
define('DOC_ROOT', '/public/');         // Percorso doc root del sito 
define('ROOT_FOLDER', 'public');        // Nome della cartella root
// Impostazioni del database
$type = 'mysql';                        // Tipo di database
$server = 'localhost';                  // Server su cui si trova il database
$db = 'library';                        // Nome del database
$port = '8889';                         // Porta del servizio
$username = 'root';                     // Nome utente
$password = 'root';                     // Password

$dsn = "$type:host=$server;dbname=$db;port=$port;";
try{
    $pdo = new PDO($dsn,$username,$password);
    echo "Connesso";
}catch(PDOException $e){
    throw new PDOException($e->getMessage(), $e->getCode());
}
// TODO:   Impostazioni per l'upload dei file

?>