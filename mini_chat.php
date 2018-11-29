<?php include "header.php"; ?>
<?php include "form.php"; ?>

<?php 

$pseudo = $_POST['pseudo'];
$message = $_POST['message'];

//Insertion en BDD
$req = $bdd->prepare('INSERT INTO minichat(pseudo, message, date_ajout) VALUES(?, ?, NOW())');
$req->execute(array($pseudo, $message));

?>

<!-- Conversation -->
        <div class="row justify-content-center">      
            <div class="col-6">
               <h2 class="font-content" style="font-size: 1rem;">Votre discussion :</h2>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-6 convers">
                <?php 
                
                //Lecture BDD
                $req = $bdd->query('SELECT pseudo, message, DATE_FORMAT(date_ajout, \'Le %d/%m/%Y à %Hh%imin%ss\') AS date FROM minichat ORDER BY date_ajout DESC LIMIT 0, 5');
                
                while ($donnees = $req->fetch()){
                    
                ?>
                <div class="row">
                    <div class="col-12 mt-1">
                        <span class="font-italic"><?php echo ($donnees['date']); ?> - </span>
                        <span class="white font-weight-bold"><?php echo htmlspecialchars($donnees['pseudo']); ?></span>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 white mb-2">
                        <?php echo htmlspecialchars($donnees['message']); ?>
                    </div>
                </div>
                <?php } //end while ?>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-6 my-4 text-center">
               <form action="remove.php" method="post">
                   <button type="submit" class="btn btn-outline-secondary" action="remove.php">Effacer la conversation</button>
               </form>
                
            </div>
        </div>
        
    </div><!-- End container -->
</main>

<?php include "footer.php"; ?>