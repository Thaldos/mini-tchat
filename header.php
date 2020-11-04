<?php 
// Connexion à la base de données :
try{
    $bdd = new PDO('mysql:host=localhost;dbname=mini_chat;charset=utf8', 'root', '');
}
catch(Exception $e){
        die('Erreur : '.$e->getMessage());
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Mini-tchat </title>
	
	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Pacifico|Raleway" rel="stylesheet"> 
	
	<!-- Style -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	
</head>

	<body>
       <header>
           <div class="container">
               <div class="row justify-content-center">
                   <div class="col-2 text-center my-5">
                       <h1 class="h3">Mini-tchat<br>
                       <span class="d-block font-content sous-titre bleu">OpenClassrooms</span>
                       </h1>
                   </div>
               </div>
           </div>
       </header>