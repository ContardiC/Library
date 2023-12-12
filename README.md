# Library

Questo progetto è un sistema online per gestire il prestito di libri. È stato sviluppato utilizzando PHP, MySQL, HTML, CSS e JavaScript.

## Funzionalità

- Registrazione e accesso degli utenti
- Aggiunta, modifica ed eliminazione di libri
- Aggiunta, modifica ed eliminazione di autori
- Aggiunta, modifica ed eliminazione di case editrici
- Aggiunta, modifica ed eliminazione di clienti
- Prestito e restituzione di libri
- Visualizzazione di tutti i libri disponibili
- Visualizzazione di tutti i prestiti attivi
- Visualizzazione di tutti i clienti registrati
- Invio email ai clienti registrati

## Requisiti

- PHP 5.6 o versioni successive
- MySQL 5.6 o versioni successive
- Un server web come Apache o Nginx

## Installazione

1. Clonare il repository
2. Importare il file **`database.sql`** in MySQL
3. Modificare le credenziali del database nel file  **`database-connection.php`** 
4. Avviare il server web

## Utilizzo

### Parte utente
1. Registrarsi al sistema
2. Accedere al sistema
3. Visualizzare i libri che si hanno in prestito
4. Prendere in prestito un libro
5. Restituire un libro in prestito

### Parte admin
1. Aggiungere/modificare/rimuovere un libro
2. Aggiungere/modificare/rimuovere un autore
3. Aggiungere/modificare/rimuovere una casa editrice
4. Inviare un'email ad un utente

## Contribuire

Siamo felici di accettare contributi da parte della comunità! Per contribuire, seguire questi passaggi:

1. Fork del repository
2. Creare un branch per la nuova funzionalità (**`git checkout -b my-new-feature`**)
3. Committare le modifiche (**`git commit -am 'Add some feature'`**)
4. Push del branch (**`git push origin my-new-feature`**)
5. Creare una nuova Pull Request
