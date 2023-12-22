<?php
	echo "<h1>Contact</h1>";
    echo "<h2>Contactez moi !</h2>";
	echo "<div class='formwrapper'>";
        echo "<form action='./php/contact.php' method='post'>";
        // Nom
        echo "<div class='nom'>";
            echo "<p>Nom</p>";
            echo "<input type='text' name='Nom' placeholder='Votre Nom'>";
        echo "</div>";
        // sujet
        echo "<div class='sujet'>";
            echo "<p>Sujet</p>";
            echo "<input type='text' name='subject' placeholder='Sujet'>";
        echo "</div>";
        // Message
        echo "<div class='message'>";
            echo "<p>Message</p>";
            echo "<textarea name='body' rows='10' cols='50'></textarea>";
        echo "</div>";
        echo "<div class='g-recaptcha' data-sitekey='6LeK6DkpAAAAAL1VLNtCir0-V331rtUcOLayu7IU'></div>";
        echo "<button type='submit' value='Submit' name='ok' id='submit_mail'>Envoyer mail</button>";
        echo "</form>";
	echo "</div>";
    // J'ai pensé à utiliser des boucles pour cela, mais vraiment pas certain que ce soit plus
    // court, ou plus intelligible
?>
