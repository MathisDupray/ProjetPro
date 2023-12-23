<?php
$data = yaml_parse_file("../assets/data/competences.yaml");
$maxSkillLevel = 10;
echo "<h1>Competences</h1>";
echo "<div class='tables'>";
foreach ($data as $domaine) {
    echo "<div class='domaine'><h2>".$domaine['domaine']."</h2>\n";
    foreach ($domaine["competences"] as $competence => $niveau) {
        echo "<div class='competence'>";
        echo "<p class='competence-name'>".$competence."</p>";
        if (is_int($niveau)) { // Si int, process normalement
            echo "<div class='progress-bar'>";
            echo "<div class='progress'><div class='gradient-bar' style='width: ".($maxSkillLevel * $niveau)."%;'></div></div>";
            echo "</div>";
        } else { // Si pas un int, just echo la string
            echo "<div class='skill-description'>".$niveau."</div>";
        }

        echo "</div>\n";
    }
    echo "</div>";
}
echo "</div>";
?>
