<?php
include '../includes/header.php';
?>
<div class="container">
    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="./img/libreria.jpg" alt="foto della nostra libreria" width="72" height="autoa">
        <h1 class="display-5 fw-bold text-body-emphasis">Libreria</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Registrati e accedi per prenotare i tuoi libri </p>
        </div>
    </div>
    <form method="post" action="../src/add-user.php">
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
</div>
<?php
require_once '../includes/footer.php';
?>