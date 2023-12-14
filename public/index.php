<?php
include '../includes/sessions.php';
require_login($logged_in);
include '../config/database-connection.php';
include '../includes/header.php';
include '../includes/navbar.php';
include '../includes/footer.php';
    
    echo "<div class='container'>";
    $email = $_SESSION['email'];
    echo "Ciao $email";
    $sql = "SELECT id FROM utenti WHERE email LIKE '$email'";
    $res = $conn->query($sql);

    $row = $res->fetch_assoc();
    $id = $row['id'];
    $sql = "SELECT l.titolo AS titolo , p.data_prestito AS datap FROM libri l, prestiti p, utenti u
    WHERE p.id_utente = u.id AND
    p.id_libro = l.id AND u.id = $id";
    $res = $conn->query($sql);
    if($res->num_rows>0){    
?>
<div class="card" style="width: 18rem;">
  <div class="card-header">
    Libri in prestito 
  </div>
  <ul class="list-group list-group-flush">
  <?php
  while($row = $res->fetch_assoc()){
    echo "<li class='list-group-item'>{$row['titolo']}</li>";
    echo "<li class='list-group-item'>{$row['datap']}</li>";
  }
  
  ?>
  </ul>
</div>





<?php
    
    }else{
        // TODO: sistemare le parentesi graffe
        echo "<h1>Non hai libri in prestito </h1>";
}
echo "</div>";
include '../includes/footer.php';
?>