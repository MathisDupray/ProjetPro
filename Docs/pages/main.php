<!doctype html>
<html lang="fr">
	<head>
		<title>Projet pro</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="./../assets/css/main.css">
		<script src="https://kit.fontawesome.com/c9930ba331.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<header>
			<div id="navbar">
				<ul>
					<li><i class="headerlogo fa-brands fa-html5 fa-4x" style="color: #ffffff;"></i></li>
					<li><i class="headerlogo fa-brands fa-css3-alt fa-4x" style="color: #ffffff;"></i></li>
					<li><i class="headerlogo fa-brands fa-php fa-4x" style="color: #ffffff;"></i></li>
					<li><i class="headerlogo fa-solid fa-database fa-4x" style="color: #ffffff;"></i></li>
				</ul>
				<ul>
					<li><a href="#">Accueil</a></li>
					<li><a href="#About">A propos</a></li>
					<li><a href="#anchorskills">Compétences</a></li>
					<li><a href="#anchorexperience">Experience</a></li>
					<li><a href="#anchorform">Formation</a></li>
					<li><a href="#Contact">Contact</a></li>
				</ul>
			</div>
			<hr class="splitbar">
		</header>
		<div class="main">
			<div class="welcome">
				<h1>Bienvenue sur mon site perso</h1>
				<h2>Developpeur en herbe</h2>
				<p>
					Site fabriqué à partir de HTML, CSS, PHP et YAML
				</p>
				<img src="./../assets/images/welcome.jpg" id="imgwelcome">
				<a href="#About"><i class="down fa-solid fa-arrow-down fa-4x" style="color: #ffffff;"></i></a>
			</div>
			<section class="about" id="About">
				<h1>A propos</h1>
				<p id="accroche">Je m'appelle Mathis Dupray, étudiant en BTS SIO à Caensup St Ursule et ce site contient des informations
					à mon sujet. Vous y trouverez mes formations, compétences ainsi qu'un formulaire de contact
				</p>
				<div class="bg">
					<p class="text">Dupray Mathis, 23 ans <br><a href="#">Mon CV</a>
					</p>
					<br>
					<p class="text">
						Developpeur en devenir et spécialiste systèmes et réseaux
					</p>
					<p class="text">
						Je suis motivé par tout ce qui touche à la technologie
						et j'ai toujours envie d'en apprendre plus.
					</p>
					<img id="aboutmeimg" src="./../assets/images/aboutme.jpg">
				</div>
			</section>
			<section class="skills" id="anchorskills">
				<h1>Competences</h1>
				<div class="tables">
					<?php
						include("./php/competences.php");
					?>
				</div>
			</section>
			<section class="experiences" id="anchorexperience">
				<h1>Job experiences</h1>
					<div class="job_wrapper" style="display:flex;">
					  	<?php
							include("./php/jobs.php")
						?>
					</div>
			</section>
			<section class="Formation" id="anchorform">
				<h1>Formation</h1>
					<?php
						include("./php/formation.php")
					?>	
			</section>
			<section id="Contact">
				<h1>Contact</h1>
				<p>future php form</p>
				<p>Passer par un serveur SMTP 
					> utiliser l'adresse sts-sio relais SMTP
					google smtp serveur
					essayer les 2 ports 587 et 465
					fct mail de php, php.ini 
					integrer une librairie : captcha, PHPMailer
					Utiliser composer : gestionnaire de dépendendances
				</p>
				<h2>Contactez le</h2>
					<form action="process-form.php" method="post">
						<label for="name">Nom :</label>
						<input type="text" id="name" name="name" required>

						<br>

						<label for="email">Email :</label>
						<input type="email" id="email" name="email" required>

						<br>

						<label for="message">Message :</label>
						<textarea id="message" name="message" rows="4" required></textarea>

						<br>

						<input type="submit" value="Envoyer">
					</form>
				<?php
					include_once './../yaml/vendor/autoload.php';
					use PHPMailer\PHPMailer\PHPMailer;
					$mail = new PHPMailer();
				?>
			</section>
	</body>
</html>
