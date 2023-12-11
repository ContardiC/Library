<?php
include '../includes/header.php';
?>
<div class="container ">
    <main class="form-signin w-100 m-auto">
        <form method="post" action="../src/signin.php">
            <img class="mb-4" src="./img/box-arrow-in-right.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Login</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
        </form>
    </main>





</div>
<?php
include '../includes/footer.php';
?>