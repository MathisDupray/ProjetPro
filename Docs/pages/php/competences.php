<?php
$data = yaml_parse_file("../assets/data/competences.yaml");
$maxSkillLevel = 10;
echo "<h1>Competences</h1>";
echo "<div class='tables'>";
foreach ($data as $domaine) {
    echo "<div class='domaine'><h2>".$domaine['domaine']."</h2>\n";

    // Check if the 'competences' key is present and if it's an array
    if (isset($domaine["competences"]) && is_array($domaine["competences"])) {
        foreach ($domaine["competences"] as $competence => $niveau) {
            // Convert competence name to lowercase and remove spaces
            $competenceLowerCase = str_replace(' ', '', strtolower($competence));

            echo "<div class='competence'>";
            echo "<p class='competence-name'>".$competence."</p>";

            // Check if $niveau is an integer
            if (is_int($niveau)) {
                echo "<div class='progress-bar'>";
                echo "<div class='progress'><div class='gradient-bar' style='width: ".($maxSkillLevel * $niveau)."%;'></div></div>";
                echo "</div>";
            } else {
                // If $niveau is a string, check if the corresponding PDF file exists
                $pdfFilePath = "./../../assets/images/".$competenceLowerCase.".pdf";
                if (file_exists($pdfFilePath)) {
                    echo "<div class='pdf-link'><a href='".$pdfFilePath."' target='_blank'>Lien vers certif</a></div>";
                } else {
                    echo "<div class='skill-description'>".$niveau."</div>";
                }
            }

            echo "</div>\n";
        }
    } else {
        // If 'competences' key is not present or not an array, handle it accordingly
        echo "<p>No competences available for this domain.</p>";
    }

    echo "</div>";
}
echo "</div>";
?>
