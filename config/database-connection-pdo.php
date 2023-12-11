<?php
$type = 'mysql';                        // Tipo di database
$server = 'localhost';                  // Server su cui si trova il database
$db = 'library';                        // Nome del database
$port = '8889';                         // Porta del servizio
$username = 'root';                     // Nome utente
$password = 'root';                     // Password

$options = [                            // Opzioni per PDO 
    PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,
    /*
    PDO::ERRMODE_EXCEPTION indica che gli errori dovrebbero essere gestiti tramite eccezioni. 
    Quando si verifica un errore durante l’esecuzione di una query o di altre operazioni sul database,
    verrà lanciata un’eccezione di tipo PDOException. 
    Questo semplifica la gestione degli errori nel codice, 
    consentendo di catturare e gestire gli errori in modo più elegante.
    */
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    /*
    PDO::FETCH_ASSOC indica che i risultati delle query dovrebbero essere restituiti come array associativi.
    In questo modo, i nomi delle colonne del risultato verranno utilizzati come chiavi associative nell’array,
    semplificando l’accesso ai dati.
    */
    PDO::ATTR_EMULATE_PREPARES => false,
    /*
    PDO::ATTR_EMULATE_PREPARES => false: Questa istruzione disabilita la modalità di emulazione delle query preparate. 
    In particolare: Le query preparate sono un meccanismo di sicurezza che previene gli attacchi di SQL injection. Quando questa opzione è impostata su false, 
    PDO utilizzerà le query preparate del database sottostante invece di emularle. 
    Questo è preferibile per motivi di sicurezza e prestazioni.
    */
];
$dsn = "$type:host=$server;dbname=$db;port=$port;";
try{
    $pdo = new PDO($dsn,$username,$password);
    // TEST connessione
    // echo "Connesso";
}catch(PDOException $e){
    throw new PDOException($e->getMessage(), $e->getCode());
}
?>