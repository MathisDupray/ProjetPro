<?php require_once("../yaml/yaml.php"); ?>
<!doctype html>
<html lang="fr">
	<head>
		<title>Projet pro</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="./../assets/css/main.css">
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
					<li><a href="#Formation">Formation</a></li>
					<li><a href="#Contact">Contact</a></li>
				</ul>
			</div>
			<hr class="splitbar">
		</header>
		<div class="main">
			<div class="welcome">
				<h1>Welcome to my port-folio</h1>
				<h2>Trying to web dev</h2>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci obcaecati reiciendis porro in modi natus error, perspiciatis et molestiae repudiandae possimus accusantium dolor unde hic provident laudantium voluptatibus. Rem, delectus!
				</p>
				<img src="./../assets/images/welcome.jpg" id="imgwelcome">
				<a href="#About"><i class="down fa-solid fa-arrow-down fa-4x" style="color: #ffffff;"></i></a>
			</div>
			<section class="about" id="About">
				<h1>About</h1>
				<p id="accroche">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi architecto, et doloremque sit cumque debitis temporibus non! Fugiat nobis eos, similique numquam odio obcaecati atque, optio libero maiores quod error?</p>
				<div class="bg">
					<p id="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur, animi nulla unde libero voluptatem suscipit nobis. Minus explicabo ipsam placeat vitae doloremque harum odit! Atque vero nesciunt nam eveniet impedit?</p>
					<img id="aboutmeimg" src="./../assets/images/aboutme.jpg">
				</div>
			</section>
			<section class="skills" id="anchorskills">
				<h1>Competences</h1>
				<div class="tables">
					<ul>
						<li class="domaine">Developpement</li>
						<li>CSS <i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-regular fa-star" style="color: #ffffff;"></i><i class="fa-regular fa-star" style="color: #ffffff;"></i></li>
						<li>HTML <i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-regular fa-star" style="color: #ffffff;"></i></li>
						<li>JavaScript <i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-regular fa-star" style="color: #ffffff;"></i><i class="fa-regular fa-star" style="color: #ffffff;"></i><i class="fa-regular fa-star" style="color: #ffffff;"></i><i class="fa-regular fa-star" style="color: #ffffff;"></i></li>
						<li>Python <i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-regular fa-star" style="color: #ffffff;"></i><i class="fa-regular fa-star" style="color: #ffffff;"></i><i class="fa-regular fa-star" style="color: #ffffff;"></i></li>
						<li>PHP <i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-regular fa-star" style="color: #ffffff;"></i><i class="fa-regular fa-star" style="color: #ffffff;"></i><i class="fa-regular fa-star" style="color: #ffffff;"></i></li>
					</ul>
					<ul>
						<li class="domaine">Réseau</li>
						<li>Adressage IP <i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-regular fa-star" style="color: #ffffff;"></i></li>
						<li>Sous-réseaux <i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-regular fa-star" style="color: #ffffff;"></i></li>
						<li>Infrastructure réseaux <i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-regular fa-star" style="color: #ffffff;"></i><i class="fa-regular fa-star" style="color: #ffffff;"></i></li>
					</ul>
					<ul>
						<li class="domaine">Langues</li>
						<li>Francais <i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-solid fa-star-half-stroke" style="color: #ffffff;"></i></li>
						<li>Anglais <i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-solid fa-star-half-stroke" style="color: #ffffff;"></i></li>
						<li>Espagonl <i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-solid fa-star" style="color: #ffffff;"></i><i class="fa-regular fa-star" style="color: #ffffff;"></i><i class="fa-regular fa-star" style="color: #ffffff;"></i><i class="fa-regular fa-star" style="color: #ffffff;"></i></li>
					</ul>
				</div>
			</section>
			<section class="experiences" id="anchorexperience">
				<h1>Job experiences</h1>
				<div class="flip-card">
					<div class="flip-card-inner">
					  <div class="flip-card-front">
						<img src="./../assets/images/logojob1.png" id="imgjob1">
					  </div>
					  <div class="flip-card-back">
					  	<?php
							$data=my_yaml_parse_file("../assets/yaml/jobs.yaml");
							// print_array($data);
							//print_array($data["job_desc"]);
							foreach($data AS $jobs){
								echo "<p>".$jobs["poste"]."</p>\n";
								echo "<p>".$jobs["entreprise"]."</p>\n";
								echo "<p>".$jobs["dateStart"]."</p>\n";
								echo "<p>".$jobs["dateEnd"]."</p>\n";
								echo "<p>".$jobs["do_what"]."</p>\n";
							}
						?>
						<p>Manutention, manipulations d'objets lourds/coupants</p><!-- do_what -->
					  </div>
					</div>
				  </div>
			</section>
			<section id="Formation">
				<h1>Formation</h1>
				<div id="formationlist">
					<div id="formation_gauche"> <!-- Séparer en 2 divs pour utiliser border pour ligne milieu -->
						<div id="formationitem1">
							<img src="#">
							<h3>Baccalauréat scientifique</h3>
							<p>Année d'obtention : 2017</p>
							<p>Lycée Charles-Francois Lebrun</p>
							<p>Coutances, Manche</p>
							<p>Mention Assez Bien</p>
						</div>
						<div id="formationitem2">
							<h3>Licence LLCER</h3>
							<img src="#">
							<p>2021-2022</p>
							<p>Caen, Calvados</p>
							<p>Langue anglaise, bases du russe</p>
							<p>Année non terminé</p>
						</div>
					</div>
					<div id="formation_droite">
						<div id="formationitem3">
							<h3>IUT STID</h3>
							<img src="#">
							<p>2018-2020</p>
							<p>Lisieux, Orne</p>
							<p>Statistiques et informatique décisionnelle</p>
							<p>Non obtenu</p>
							<p>Etudes statistiques, traitement de données</p>
						</div>
						<div id="formationitem4">
							<h3>BTS SIO</h3>
							<img src="#">
							<p>2023-</p>
							<p>Caen, Calvados</p>
							<p>Services informatiques aux organisations</p>
							<p>Réseaux, dev</p>
						</div>
					</div>
				</div>
			</section>
			<section id="Contact">
				<h1>Contact</h1>
				<p>future php form</p>
				<?php

				?>
			</section>
		</div>	
		<script src="https://kit.fontawesome.com/c9930ba331.js" crossorigin="anonymous"></script>
	</body>
</html>