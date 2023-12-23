<?php
echo "<h1>Contact</h1>";
echo "<h2>Contactez moi !</h2>";
echo "<div class='formwrapper'>";
echo "<form action='./php/contact.php' method='post' onsubmit='return validateForm()'>";

// Nom
echo "<div class='nom'>";
echo "<p>Nom</p>";
echo "<input type='text' name='nom' placeholder='Votre Nom' required>";
echo "</div>";

// email sender
// Nom
echo "<div class='youremail'>";
echo "<p>Email</p>";
echo "<input type='text' name='email' placeholder='Votre Email' required>";
echo "</div>";

// sujet
echo "<div class='sujet'>";
echo "<p>Sujet</p>";
echo "<input type='text' name='subject' placeholder='Sujet' required>";
echo "</div>";

// Message
echo "<div class='message'>";
echo "<p>Message</p>";
echo "<textarea name='body' rows='10' cols='50' required></textarea><p style='padding-left:5vw;'>Conformément au RGPD, je ne stocke aucune donnée renseignée ici</p>";
echo "</div>";

// reCAPTCHA
echo "<div class='g-recaptcha' data-sitekey='6LeK6DkpAAAAAL1VLNtCir0-V331rtUcOLayu7IU'></div>";

// Verification ReCaptcha faite
echo "<script>
        function validateForm() {
            var response = grecaptcha.getResponse(); /*requete api google*/
            if (response.length == 0) {
                alert('Merci de valider le reCaptcha');
                return false;
            }
            return true;
        }
      </script>";

// Submit button
echo "<button type='submit' value='Submit' name='ok' id='submit_mail'>Envoyer mail</button>";
echo "</form>";
echo "</div>";
?>