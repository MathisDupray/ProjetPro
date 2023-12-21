<?php require_once("../libraries/yaml.php");
?>
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
				<?php
					include("./php/accueil.php");
				?>
			<section class="about" id="About">
				<?php
					include("./php/apropos.php");
				?>
			</section>
			<section class="skills" id="anchorskills">
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
			<section id="Contactform">
				<?php 
					include("./php/contactform.php");
				?>
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
