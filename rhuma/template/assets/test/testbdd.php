<!DOCTYPE HTML>  
<html>
    <head>
        <style>
            .error {color: #FF0000;}
        </style>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equip="X-UA-Compatible" content="ie=edge">
        <title>la fabrique du petit mange</title>
        <link href="lafabriquedupetitmange.css" rel="stylesheet">
    </head>
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
 <nav>
     <ul>
         <li><a href="lafabriquedupetitmange.html">home</a></li>   
         <li><a href="today_menu.html">Today menu</a></li>
         <li><a href="chef_speciality.html">Chef Speciality</a></li>
         <li><a href="book_a_table.html">Book a table</a></li>
         <li><a href="testest5.php">Golden book </a></li>
         <li><a href="test.php">test </a></li>
     </ul>

 </nav>
 <!-- navigation bar section end-->



<body>  
<?php



// define variables and set to empty values
$fnameErr = $lnameErr = $emailErr = "";
$fname = $lname = $email = $comment =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "First Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["lname"])) {
    $lnameErr = "Last Name is required";
  } else {
    $lname = test_input($_POST["lname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $lnameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<p><span class="error">* required field</span></p>
<form method="post" action="test_php6.php">  
  First Name: <input type="text" name="fname" value="<?php echo $fname;?>">
  <span class="error">* <?php echo $fnameErr;?></span>
  <br><br>
  Last Name: <input type="text" name="lname" value="<?php echo $lname;?>">
  <span class="error">* <?php echo $lnameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>









    <div class="quote">"Live your dreams, do not dream your life"</p></div>

        <div class="copyright">
            &copy; 2019 Greg. All rights reserved.
        </div>
</body>
</html>