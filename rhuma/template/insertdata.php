

<?php
// var_dump($_POST);
// define variables and set to empty values
$NomErr = $PrenomErr = $telmobileErr = $emailErr = "";
$Nom = $Prenom = $adresse = $telfixe = $telmobile = $email = $comment =  "";

$errors = [];

// Vérifier que les données soient envoyées par un POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (empty($_POST["Nom"])) {
     $errors["NomErr"] = "First Name is required";
  
 } else {
     $Nom = test_input($_POST["Nom"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$Nom)) {
     $errors["NomErr"] = "Only letters and white space allowed";}  
 }

 if (empty($_POST["Prenom"])) {
    $errors["PrenomErr"] = "Last Name is required";
 

 } else {
           $Prenom = test_input($_POST["Prenom"]);
           // check if name only contains letters and whitespace
           if (!preg_match("/^[a-zA-Z ]*$/",$Prenom)) {
            $errors["PrenomErr"] = "Only letters and white space allowed";}  
   }

 if (empty($_POST["adresse"])) {
     $adresse = "";
 } else {
     $adresse = test_input($_POST["adresse"]);
   }
 
 if (empty($_POST["telfixe"])) {
   $telfixe = "";
 } else {
   $telfixe = test_input($_POST["telfixe"]);}
 }


 if (empty($_POST["telmobile"])) {
    $errors["telmobileErr"] = "mobile phone number is required";
 } else {

     $telmobile = test_input($_POST["telmobile"]);}
     // check if number only contains number
     if (!preg_match(" /[0-9]{10}/ ",$telmobile)) {
      // if (!preg_match(" \^(\d\d\s){4}(\d\d)$\ ",$telmobile)) {
     $errors["telmobileErr"] = "mobile phone number invalid";
   }

 if (empty($_POST["email"])) {
    $errors["emailErr"] = "Email is required";
 } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors["emailErr"] = "Invalid email format";}
 }
 
     if (empty($_POST["comment"])) {
   $comment = "";
 } else {
   $comment = test_input($_POST["comment"]);
 }


function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}

if(!empty($errors)){
    foreach($errors as $error){
        // echo "<h3>" . "ERROR" ."</h3>" . $error . "<br>";
    }
}else{
    try

    {
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=rhuma-sug;charset=utf8', 'greg', 'greg');
        //bonne pratrique pour détail des erreurs//
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $req = $bdd->prepare ('INSERT INTO contact (Nom, Prenom, adresse, telmobile, email, comment ) 
                                VALUES (:Nom, :Prenom, :adresse, :telmobile, :email, :comment)');
        
                $req->bindParam(':Nom', $_POST["Nom"]);
                $req->bindParam(':Prenom', $_POST["Prenom"]);
                $req->bindParam(':adresse', $_POST["adresse"]);
                $req->bindParam(':telmobile', $_POST["telmobile"]);
                $req->bindParam(':email', $_POST["email"]);
                $req->bindParam(':comment', $_POST["comment"]);
        
        
        if($req->execute()){
            echo "inertion réussie";
        }else{
            echo "erreur dans l'insertion";
        };
        var_dump ($req);

    }
    catch(PDOException $e)
    {
        var_dump($e);
    }
}
?>