<?php
# creation routage de page.
if (isset($_GET['page'])) {
    
    if ($_GET['page']=="accueil") {
       include "first.php";
      
       include "second.php";
    
       include "third.php";
        # code...
    }

    elseif ($_GET['page']=="contact") {
        include "insertdata.php";
        include "first_contact.php";
    }

    elseif ($_GET['page']=="produits") {
        include "produit.php";
    }

    elseif ($_GET['page']=="panier") {
        include "panier.php";
        include "db.php";
        include "cart.php";
    }
 
    elseif ($_GET['page']=="about") {
        include "about.php";
        
        
    }
    elseif ($_GET['page']=="inscription") {
        include "inscription.php";
        
        
    }

}



?>
