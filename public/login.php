<?php
include '../includes/sessions.php';
include '../includes/header.php';
include '../config/database-connection.php';
if($logged_in){
    header("Location : index.php");
    exit;
}
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = strtolower($_POST['email']);
    $password = md5($_POST['password']);

    $sql = "SELECT email, password FROM utenti WHERE email LIKE '$email' AND password LIKE '$password'";
    $res = $conn->query($sql);
    if($res->num_rows>0){
        login($email);
        header("Location: index.php");
        exit;
    }
}
?>
<div class="container ">
    <main class="form-signin w-100 m-auto">
        <form method="post" action="login.php">
            <img class="mb-4" src="./img/box-arrow-in-right.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Login</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
        </form>
        <h1 class="h3 mb-3 fw-normal">Non hai un account? <a href="register.php">Registrati</a></h1>
    </main>
</div>
<?php
include '../includes/footer.php';
?>