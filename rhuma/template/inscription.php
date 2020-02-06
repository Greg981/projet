<?php
if (!empty($_SESSION['utilisateur'])) {
    /*
	 * Nous sommes dans le cas d'un utilsateur connect�
	 */
?>

<!-- <p>
  
<div class="jumbotron reser">
  <h1 class="display-4">Cher Client</h1>
  <p class="lead">Vous êtes déja connecté</p>
  <hr class="my-4">
  <p></p>
  <p class="lead">
    <a class="btn btn-reser btn-lg" href="?page=accueil" role="button">Accueil</a>
  </p>
</div>
</p> -->


<?php

}else{
//debug($_POST);
if ( ! empty( $_POST ) ) {
	if ( ! isset(
		$_POST['nom'],
        $_POST['prenom'],
        $_POST['email'],
        $_POST['password'],
        $_POST['telephone'],
        $_POST['adresse']
        ) )
        
	{
        echo "il manque une ou plusieurs donnees";

	} else {
		$managerUtilisateur = new ManagerUtilisateur();
        $managerUtilisateur->setDb( $db );
        $utilisateur=$managerUtilisateur->add( $_POST );
    }
    
    if ( ! isset(
		$_POST['codepostal'],
        $_POST['ville']
        ) )
	{
        echo "il manque une ou plusieurs donnees";
        

	} else {
		$managerResidence = new ManagerResidence();
		$managerResidence->setDb( $db );
        $residence = $managerResidence->add( $_POST);
        //TODO mettre à jour l'utilisateur => update utilisateur set residence 
        $utilisateur->setResidence($residence->getId());
        $managerUtilisateur->update($utilisateur);

    }
    
    
}
?>

<!-- <div class="container">
    <p><span class="error">* required field </span></p>
            <form action="insertdata.php" method="post">

                <div class="row">
                    <div class="col-25">
                        <label for="Nom">Nom</label>
                        <span class="error">* <?php echo $PrenomErr;?></span>
                    </div>
                    <div class="col-75">
                        <input type="text" id="Nom" name="Nom"  placeholder="Your first name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="Prenom">Prenom</label>
                        <span class="error">*<?php echo $NomErr;?></span>
                    </div>
                    <div class="col-75">
                        <input type="text" id="Prenom" name="Prenom" placeholder="Your last name..">
                    </div>
                </div>

                <div class="row">
                        <div class="col-25">
                            <label for="adresse">Adresse</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="adresse" name="adresse" placeholder="Your email..">
                        </div>
                </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="telmobile">Portable</label>
                            <span class="error">*<?php echo $telmobileErr;?></span>
                        </div>
                        <div class="col-75">
                            <input type="tel" id="telmobile" name="telmobile" placeholder="Your Mobile phone..">
                        </div>
                    </div>

                <div class="row">
                        <div class="col-25">
                            <label for="email">Email</label>
                            <span class="error">*<?php echo $emailErr;?></span>
                        </div>

                        <div class="col-75">
                            <input type="email" id="email" name="email" placeholder="Your email..">
                        </div>
                </div>
                <div class="row">

                    <div class="col-25">
                        <label for="comment">Leave a feedback</label>
                    </div>

                    <div class="col-75">
                        <textarea id="comment" name="comment" placeholder="Write your feedback.."
                            style="height:200px"></textarea>
                    </div>
                </div>

                <div class="row">
                <input type="submit" name="inscription" id="button" class="btn_inscription" value="Inscription">
                </div>
            
        </div>
    </form>
     -->

<!-- Form section end -->

  <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">
                FORMULAIRE D'INSCRIPTION
            </div>
  <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">

  
        </div>   
    <div class="panel-body" >
        <form action="?page=inscription" method="post">
            <div id="alert_enregist" style="display:none" class="alert alert-danger">
                <p>
                    Erreur:
                </p>
                <span></span>
            </div>
                                
                                <!-- RENSEIGNEMENT -->
                                 <div class="form-group">
                                    <label for="prenom" class="col-md-3 control-label">Prenom</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom" required autofocus>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="nom" class="col-md-3 control-label">Nom</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" required>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="adresse" class="col-md-3 control-label">Adresse</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse" required>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="ville" class="col-md-3 control-label">Ville</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville" required>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="code_postal" class="col-md-3 control-label">Code Postal</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" maxlength="7" id="codepostal" name="codepostal" placeholder="Code postal" required>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="phone" class="col-md-3 control-label">Téléphone</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Téléphone" required>
                                    </div>
                                </div>
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Adresse email" required>
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Mot de passe</label>
                                    <div class="col-md-9">
                                        <input type="password" id="password" data-minlength="8" class="form-control" name="password" placeholder="mot de passe" required>
                                        <div class="help-block">Minimum de 8 caractere</div>
                                    </div>
                                    
                                </div> 

                                <div class="form-group" >
                                    <!-- Boutton -->                                        
                                     <div class="col-md-offset-3 col-md-9" style=" margin-top:20px;">
                                    <input type="submit" name="inscription" id="button" class="btn_inscription" value="Inscription">
                                        
                                    </div>
                                </div>
                                
                            
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div>  
 

         <?php

}