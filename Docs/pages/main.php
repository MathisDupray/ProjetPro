<?php /*require_once("../libraries/yaml.php");
*/?>
<!doctype html>
<html lang="fr">
	<head>
		<title>Projet pro</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="./../assets/css/main.css">
		<script src="https://kit.fontawesome.com/c9930ba331.js" crossorigin="anonymous"></script>
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		<script src="./../assets/js/arrow.js"></script>
	</head>
	<body>
		<header>
			<div id="anchoraccueil"></div>
			<?php
				include("./php/navbar.php");
			?>
		</header>
		<?php
			include("./php/scrollarrow.php");
		?>
		<div class="main">
				<?php
					include("./php/accueil.php");
				?>
			<section class="about" id="anchorapropos">
				<?php
					include("./php/apropos.php");
				?>
			</section>
			<section class="skills" id="anchorcompetences">
				<?php
					include("./php/competences.php");
				?>
			</section>
			<section class="experiences" id="anchorexperience">
				<?php
					include("./php/jobs.php");
				?>
			</section>
			<section class="Formation" id="anchorformation">
				<?php
					include("./php/formation.php");
				?>
			</section>
			<section class="Contactform" id="anchorcontact">
				<?php 
					include("./php/contactform.php"); // Un peu de javascript pour vérifier que captcha validé
				?>
				<?php
					include("./php/contact.php"); // PHPMailer fonctionne si je rentre mon mot de passe dans contact.php
				// Actions d'envoie de mail a l'intérieur de la boucle de verif captcha
				?> 
			</section>
		</div>
		<footer>
		<p>
    		<a href="http://jigsaw.w3.org/css-validator/check/referer">
        		<img style="border:0;width:88px;height:31px"
            	src="http://jigsaw.w3.org/css-validator/images/vcss"
				id="cssvalidator"
            	alt="CSS Valide !">
    		</a>
		</p>
			<?php
				include("./php/footer.php");
			?>
		</footer>
	</body>
</html>