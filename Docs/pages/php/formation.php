<?php
	$data=yaml_parse_file("../assets/data/formation.yaml");
	$compteur_div=0;
	$position=array("gauche", "droite");
	foreach($data AS $formation){
		$item_compteur_row = $compteur_div + 1;
		echo '<div class="formationitem'.$position[$compteur_div].'">';
		echo "<h3>".$formation["formation"]."</h3>\n";
		echo "<p>".$formation["date"]."</p>\n";
		echo "<p>".$formation["etab"]."</p>\n";
		echo "<p>".$formation["where"]."</p>\n";
		echo "<p>".$formation["mention"]."</p>\n";
		echo "</div>";
		$compteur_div=($compteur_div+1)%2;
    }
?>