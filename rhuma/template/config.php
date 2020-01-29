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
        include "first_contact.php";
    }

    elseif ($_GET['page']=="produits") {
        include "produit.php";
    }

    elseif ($_GET['page']=="blog") {
        include "blog.php";
    }
 
    elseif ($_GET['page']=="about") {
        include "about.php";
        
        
    }


}



?>
