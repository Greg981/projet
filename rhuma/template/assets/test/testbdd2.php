<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equip="X-UA-Compatible" content="ie=edge">
        <title>la fabrique du petit mange</title>
        <link href="lafabriquedupetitmange.css" rel="stylesheet">
    </head>
    
   <body> 
        <!-- header start -->
        <header class="tete">
         
            <div id="header" class="section">
                    <style>
                    
                    </style>
                <p>Welcome to :<strong><ins>"La Fabrique du petit mangé"</strong></ins> Dinner</p>   
            </div>
                    <!--photo resto start-->
            <img id="resto" src="photo/restaurant.jpg" border="5px">
                    <!--photo resto end-->
        </header>
        <!-- header end -->
   <!-- navigation bar section start-->
 


<?php

    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=gregbdd;charset=utf8', 'greg', 'greg');
    //bonne pratrique pour détail des erreurs//
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

?>

<?php
// define variables and set to empty values
$firstnameErr = $lastnameErr = $emailErr  = "";
$firstname = $lastname = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["First Name"])) {
    $firstnameErr = "First Name is required";
  } else {
    $firstname = test_input($_POST["FirstName"]);
  }
  if (empty($_POST["Last Name"])) {
    $lastnameErr = "Last Name is required";
  } else {
    $lastname = test_input($_POST["LastName"]);
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

}
?>


<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
echo "<h2>Your Input:</h2>";
echo $FirstName;
echo "<br>";
echo $LastName;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
echo "<br>";
?>


 <div class="container">
                    <form action="insertdata.php">
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">First Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="lname">Last Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-25">
                                    <label for="Email">Email</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="Email" name="Email" placeholder="Your email..">
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="subject">Leave a feedback</label>
                            </div>
                            <div class="col-75">
                                <textarea id="subject" name="Leave a feedback" placeholder="Write your feedback.."
                                    style="height:200px"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            
</body>
</html> 

<!-- Form section end -->