   
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equip="X-UA-Compatible" content="ie=edge">
        <title>test bdd</title>
        <link href="testcss.css" rel="stylesheet">
    </head>




    <!---->
    <div class="container">
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
                            <label for="telfixe">Telephone Fixe</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="telfixe" name="telfixe" placeholder="Your Land line..">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="telmobile">Portable</label>
                            <span class="error">*<?php echo $telmobileErr;?></span>
                        </div>
                        <div class="col-75">
                            <input type="tel" id="telmobile" name="telmobile" required placeholder="Your Mobile phone..">
                        </div>
                    </div>

                <div class="row">
                        <div class="col-25">
                            <label for="email">Email</label>
                            <span class="error">*<?php echo $emailErr;?></span>
                        </div>

                        <div class="col-75">
                            <input type="email" id="email" name="email" required placeholder="Your email..">
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
    </form>
    

<!-- Form section end -->


<div class="quote"><p>"Live your dreams, do not dream your life"</p></div>


    <div class="copyright">
        &copy; 2019 Greg. All rights reserved.
    </div>
</body>

</html>
