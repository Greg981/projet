
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
                            <input type="text" id="adresse" name="adresse" placeholder="Your adresse..">
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
                    <input type="submit" value="Submit">
                </div>
            
        </div>
    </form>
    

<!-- Form section end -->

