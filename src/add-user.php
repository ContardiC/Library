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
    if ($res->num_rows == 0) {
        $sql = "INSERT INTO utenti(nome, cognome, email, password)
        VALUES('$nome','$cognome','$email','$password')";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../public/login.php");
            exit;
        } else {
            echo "Errore " . $conn->error;
        }
    } else {
        include '../includes/header.php';
?>

        <div class="container my-5">
            <div class="p-5 text-center bg-body-tertiary rounded-3">
                <img src="../public/img/exclamation-triangle.svg" height="" 30" />
                <h1 class="text-body-emphasis">Sei già registrato</h1>
                <p class="col-lg-8 mx-auto fs-5 text-muted">
                    Premi accedi per accedere.
                </p>
                <div class="d-inline-flex gap-2 mb-5">
                    <a class="align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="button" href="../public/login.php">
                        Accedi
                        <img src="../public/img/arrow-right.svg"/>
                    </a>
                </div>
            </div>
        </div>


<?php
        include '../includes/footer.php';
    }
    $conn->close();
}
