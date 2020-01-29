

<?php
// var_dump($_POST);

try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=gregbdd;charset=utf8', 'greg', 'greg');
    //bonne pratrique pour détail des erreurs//
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $req = $bdd->prepare ('INSERT INTO reservation (Nom, Prenom, adresse, telfixe, telmobile, email, comment ) 
                            VALUES (:Nom, :Prenom, :adresse, :telfixe, :telmobile, :email, :comment)');
    
            $req->bindParam(':Nom', $_POST["Nom"]);
            $req->bindParam(':Prenom', $_POST["Prenom"]);
            $req->bindParam(':adresse', $_POST["adresse"]);
            $req->bindParam(':telfixe', $_POST["telfixe"]);
            $req->bindParam(':telmobile', $_POST["telmobile"]);
            $req->bindParam(':email', $_POST["email"]);
            $req->bindParam(':comment', $_POST["comment"]);
    
    
    if($req->execute()){
        echo "inertion réussie";
    }else{
        echo "erreur dans l'insertion";
     };
    echo $req;

}
catch(PDOException $e)
{
    var_dump($e);
}
?>