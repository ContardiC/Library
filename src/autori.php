<?php 
require '../config/database-connection.php';

$sql = "SELECT nome, cognome 
        FROM autori";
$statement = $pdo->query($sql);

while($row = $statement->fetch()){
    echo "{$row['nome']} {$row['cognome']} <br/>";
}

?>

