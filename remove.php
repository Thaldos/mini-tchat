<?php include "header.php"; 

$req = $bdd->prepare('DELETE FROM minichat WHERE 1');
$req->execute();

header('Location: index.php')

?>