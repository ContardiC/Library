<?php
include '../includes/header.php';
include '../config/database-connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //TODO: sanificare le stringhe

    $nome = ucfirst(strtolower($_POST['nome']));
    $cognome = ucfirst(strtolower($_POST['cognome']));
    $email = strtolower($_POST['email']);
    $password = md5($_POST['password']);

    $sql = "SELECT email FROM utenti WHERE email LIKE '$email'";

    $res = $conn->query($sql);
    if($res->num_rows == 0) {
        $sql = "INSERT INTO utenti(nome, cognome, email, password)
        VALUES('$nome','$cognome','$email','$password')";

        if ($conn->query($sql) === TRUE) {
            // TODO: gestire utente della corretta registrazione 
            header("Location: login.php");
            exit;
        } else {
            echo "Errore " . $conn->error;
        }
    }else{
        // TODO: gestire utente del reindirizzamento al login in quanto ha già l'account
        header("Location: login.php");
        exit;
    }
}
?>
<div class="container">
    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="./img/save.svg" alt="foto della nostra libreria" width="72" height="autoa">
        <h1 class="display-5 fw-bold text-body-emphasis">Libreria</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Registrati e accedi per prenotare i tuoi libri </p>
        </div>
    </div>
    <form method="POST" action="register.php">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="cognome" class="form-label">Cognome</label>
            <input type="text" class="form-control" id="cognome" name="cognome" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
   </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <button type="submit" class="btn btn-primary">Registrati</button>
    </form>
    <h1 class="h3 mb-3 fw-normal">Hai già un account? <a href="login.php">Accedi</a></h1>
</div>
<?php
include '../includes/footer.php';
?>