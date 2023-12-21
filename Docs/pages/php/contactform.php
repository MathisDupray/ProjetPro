<?php
	echo "<h1>Contact</h1>";
    echo "<h2>Contactez moi !</h2>";
	echo "<div class='formwrapper'>";
        echo "<form action='./php/contact.php' method='post'>";
        // to
        echo "<div class='to'>";
            echo "<p>Email</p>";
            echo "<input type='text' name='to' placeholder='adressemail@exemple.com'>";
        echo "</div>";
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
        echo "<button type='submit' id='submit_mail'>Envoyer mail</button>";
        echo "</form>";
	echo "</div>";
    // J'ai pensé à utiliser des boucles pour cela, mais vraiment pas certain que ce soit plus
    // court, ou plus intelligible
?>
