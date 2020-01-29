<link rel="stylesheet" type="text/css" href="assets/css/anim.css">
   
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?= img?>/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

  <?php
    //   // define variables and set to empty values
    //   $NomErr = $PrenomErr = $telmobileErr = $emailErr = "";
    //   $Nom = $Prenom = $adresse = $telfixe = $telmobile = $email = $comment =  "";

    // // Vérifier que les données soient envoyées par un POST
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //   if (empty($_POST["Nom"])) {
    //     $NomErr = "First Name is required";
    //   } else {
    //       $Nom = test_input($_POST["Nom"]);
    //       // check if name only contains letters and whitespace
    //       if (!preg_match("/^[a-zA-Z ]*$/",$Nom)) {
    //       $NomErr = "Only letters and white space allowed";}  
    //   }
    
    //   if (empty($_POST["Prenom"])) {
    //     $PrenomErr = "Last Name is required";
    //   } else {
    //             $Prenom = test_input($_POST["Prenom"]);
    //             // check if name only contains letters and whitespace
    //             if (!preg_match("/^[a-zA-Z ]*$/",$Prenom)) {
    //             $PrenomErr = "Only letters and white space allowed";}  
    //     }
     
    //   if (empty($_POST["adresse"])) {
    //       $adresse = "";
    //   } else {
    //       $adresse = test_input($_POST["adresse"]);
    //     }
      
    //   if (empty($_POST["telfixe"])) {
    //     $telfixe = "";
    //   } else {
    //     $telfixe = test_input($_POST["telfixe"]);}
    //   }

    //   if (empty($_POST["telmobile"])) {
    //       $telmobileErr = "mobile phone number is required";
    //   } else {
    //       $telmobile = test_input($_POST["telmobile"]);
    //       // check if number only contains number
    //       if (!preg_match(" \^(\d\d\s){4}(\d\d)$\ ",$telmobile)) {
    //       $telmobileErr = "Only number allowed";
    //     }

    //   if (empty($_POST["email"])) {
    //     $emailErr = "Email is required";
    //   } else {
    //       $email = test_input($_POST["email"]);
    //       // check if e-mail address is well-formed
    //   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //       $emailErr = "Invalid email format";}
    //   }
      
    //       if (empty($_POST["comment"])) {
    //     $comment = "";
    //   } else {
    //     $comment = test_input($_POST["comment"]);
    //   }
    // }
    // function test_input($data) {
    //   $data = trim($data);
    //   $data = stripslashes($data);
    //   $data = htmlspecialchars($data);
    //   return $data;
    // }
    
  ?>  
 
<!--    
    <div class="container">
    <p><span class="error">* required field </span></p>
            <form action="insertdata.php" method="post">

                <div class="row">
                    <div class="col-25">
                        <label for="Nom">Nom</label>
                        <span class="error">* <?php echo $NomErr;?></span>
                    </div>
                    <div class="col-75">
                        <input type="text" id="Nom" name="Nom" placeholder="Your first name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="Prenom">Prenom</label>
                        <span class="error">*</span>
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
                            <label for="telfixe">Telephone Fixe</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="telfixe" name="telfixe" placeholder="Your Land line..">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="telmobile">Portable</label>
                            <span class="error">*</span>
                        </div>
                        <div class="col-75">
                            <input type="text" id="telmobile" name="telmobile" placeholder="Your Mobile phone..">
                        </div>
                    </div>

                <div class="row">
                        <div class="col-25">
                            <label for="email">Email</label>
                            <span class="error">*</span>
                        </div>

                        <div class="col-75">
                            <input type="text" id="email" name="email" placeholder="Your email..">
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
                    <input type="submit" value="Submit">
                </div>
            
        </div>
    </form> -->
     -->

<!-- Form section end -->

<!--===============================================================================================-->
<script src="assets/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
    !--===============================================================================================-->
	<script src="assets/js/main.js"></script>
