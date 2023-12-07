<?php
define('APP_ROOT', dirname(__FILE__, 2));            // Root dell' applicazione (2 livelli sopra)
require APP_ROOT . '/config/config.php';             // Dati di configurazione 
require APP_ROOT . '/src/functions.php';             // Funzioni 

// TODO: autoload classi 

if(DEV !== true){
    set_exception_handler('handle_exception');          // Imposta il gestore delle eccezzioni
    set_error_handler('handle_error');                  // Imposta il gestore degli errori
    register_shutdown_function('handle_shutdown');      // Imposta il gestore del shutdwon
}

unset($server, $username, $password);                   // Rimuove i dati di connessione al db