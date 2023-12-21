<?php/* require_once("../assets/yaml/yaml.php");
*/?>
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
					<li><a href="#anchorformation">Formation</a></li>
					<li><a href="#Contact">Contact</a></li>
				</ul>
			</div>
			<hr class="splitbar">
		</header>
		<div class="main">
			<div class="welcome">
				<h1>Bienvenue sur mon site perso</h1>
				<?php
				?>
				<h2>Developpeur en herbe</h2>
				<p>
					Site fabriqué à partir de HTML, CSS, PHP et YAML
				</p>
				<img src="./../assets/images/welcome.jpg" id="imgwelcome" alt="#">
				<a href="#About"><i class="downarrow fa-solid fa-arrow-down fa-4x" style="color: #ffffff;"></i></a>
			</div>
			<section class="about" id="About">
				<h1>A propos</h1>
				<p id="accroche">Je m'appelle Mathis Dupray, étudiant en BTS SIO à Caensup St Ursule et ce site contient des informations
					à mon sujet.</br> Vous y trouverez mes formations, compétences ainsi qu'un formulaire de contact
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
					<img id="aboutmeimg" src="./../assets/images/aboutme.jpg" alt="#">
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
				<div class="job_wrapper">
					<?php
						include("./php/jobs.php")
					?>
				</div>
			</section>
			<section class="Formation" id="anchorformation">
				<h1>Formation</h1>
				<div class="formationwrapper">
					<?php
						include("./php/formation.php")
					?>
				</div>
			</section>
			<section id="Contact">
				<h1>Contact</h1>
				<h2>Contactez moi !</h2>
				<div class="formwrapper">
					<form action="./php/contact.php" method="post">
					<div class="to">
						<p>Email</p>
    					<input type="text" name="to" placeholder="myaddressmail@gmail.com">
					</div>
					<div class="sujet">
						<p>Sujet</p>
    					<input type="text" name="subject" placeholder="Subject">
					</div>
					<div class="message">
						<p>Message</p>
    					<textarea name="body" rows="20" cols="50"></textarea>
					</div>
    				<button type="submit" id="submit_mail">Envoyer mail</button>
					</form>
				</div>
				<?php
					include("./php/contact.php"); 
				?>
			</section>
		</div>
		<footer>
		<p>
    		<a href="http://jigsaw.w3.org/css-validator/check/referer">
        		<img style="border:0;width:88px;height:31px"
            	src="http://jigsaw.w3.org/css-validator/images/vcss"
				id="cssvalidator"
            	alt="CSS Valide !" />
    		</a>
		</p>
		<p class="textfooter">Port-folio réalisé dans le cadre de l'AP-PRO SLAM BTS SIO1 2023-2024</p>
		<p class="textfooter">Mathis Dupray</p>
		</footer>
	</body>
</html>
