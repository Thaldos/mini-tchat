<?php
if(!empty($_POST['pseudo'])){
    $pseudo = $_POST['pseudo'];
}else {
    $pseudo = "";
}

?>
   

   <main>
    <div class="container mb-5 pb-2">
       
       <!-- Formulaire -->
        <div class="row justify-content-center mb-4">
            <div class="col-4">
                <form method="post" action="mini_chat.php">
                  <div class="form-group">
                    <label for="pseudo">Pseudo</label>
                    <input type="text" class="form-control" id="pseudo" name="pseudo" autofocus placeholder="Pseudo" value="<?php if(!empty($pseudo)){
                            echo $pseudo; 
                        }else { echo ""; } ?>" 
                        style="background: transparent; color: rgba(255, 255, 255, 0.5);">
                  </div>
                  <div class="form-group">
                    <label for="message">Message</label>
                      <textarea class="form-control" id="message" name="message" style="background: transparent; color: rgba(255, 255, 255, 0.5);"></textarea>
                  </div>
                  
                  <div class="d-flex justify-content-end">
                      <button type="submit" class="btn btn-outline-secondary">Envoyer</button>
                  </div>
                  
                </form>
            </div>
        </div><!-- End row -->