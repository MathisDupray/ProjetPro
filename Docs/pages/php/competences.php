<?php
$data = yaml_parse_file("../assets/data/competences.yaml");
$maxSkillLevel = 10;

echo "<h1>Competences</h1>";
echo "<div class='tables'>";

foreach ($data as $domaine) {
    echo "<div class='domaine'><h2>".$domaine['domaine']."</h2>\n";

    foreach ($domaine["competences"] as $competence => $niveau) {
        // Créer une variable pour les certifs, "SecNum Academie" --> "secnumacademie", pour chemin vers certif.pdf
        $competenceLowerCase = str_replace(' ', '', strtolower($competence));
        echo "<div class='competence'>";
        echo "<p class='competence-name'>".$competence."</p>";

        if (!is_numeric($niveau)) {
            echo "<div class='skill-description' style='text-align: center;'>";
            // Si chaine de caracteres, alors verif' si un fichier de certif relatif à la competence existe
            $pdfFilePath = "./../../Docs/pages/php/" . $competenceLowerCase . ".pdf"; // Chemin vers le .pdf
            if (file_exists($pdfFilePath)) {
                echo "<a href='".$pdfFilePath."' target='_blank'>{$niveau}</a>";
            } else {
                echo $niveau;
            }
            echo "</div>";
        } else {
            // Numeric values
            echo "<div class='progress-bar'>";
            echo "<div class='progress'><div class='gradient-bar' style='width: ".($maxSkillLevel * $niveau)."%;'></div></div>";
            echo "</div>";
        }

        echo "</div>\n";
    }

    echo "</div>";
}

echo "</div>";
?>
