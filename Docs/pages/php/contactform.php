<?php
echo "<h1>Contact</h1>";
echo "<h2>Contactez moi !</h2>";
echo "<div class='formwrapper'>";
echo "<form action='./php/contact.php' method='post' onsubmit='return validateForm()'>";

// Nom
echo "<div class='nom'>";
echo "<p>Nom</p>";
echo "<input type='text' name='Nom' placeholder='Votre Nom' required>";
echo "</div>";

// sujet
echo "<div class='sujet'>";
echo "<p>Sujet</p>";
echo "<input type='text' name='subject' placeholder='Sujet' required>";
echo "</div>";

// Message
echo "<div class='message'>";
echo "<p>Message</p>";
echo "<textarea name='body' rows='10' cols='50' required></textarea>";
echo "</div>";

// reCAPTCHA
echo "<div class='g-recaptcha' data-sitekey='6LeK6DkpAAAAAL1VLNtCir0-V331rtUcOLayu7IU'></div>";

// Verification ReCaptcha faite
echo "<script>
        function validateForm() {
            var response = grecaptcha.getResponse();
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