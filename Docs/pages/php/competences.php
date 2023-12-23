<?php
$data = yaml_parse_file("../assets/data/competences.yaml");
$maxSkillLevel = 10;

echo "<h1>Competences</h1>";
echo "<div class='tables'>";

foreach ($data as $domaine) {
    echo "<div class='domaine'><h2>".$domaine['domaine']."</h2>\n";

    foreach ($domaine["competences"] as $competence => $niveau) {
        // Convert competence name to lowercase and remove spaces
        $competenceLowerCase = str_replace(' ', '', strtolower($competence));

        echo "<div class='competence'>";
        echo "<p class='competence-name'>".$competence."</p>";

        // Check if $niveau is a number (integer or floating-point)
        if (is_numeric($niveau)) {
            echo "<div class='progress-bar'>";
            echo "<div class='progress'><div class='gradient-bar' style='width: ".($maxSkillLevel * $niveau)."%;'></div></div>";
            echo "</div>";
        } else {
            // If $niveau is a string, create a link for any non-numeric string
            $pdfFilePath = "./../../Docs/pages/php/" . $competenceLowerCase . ".pdf"; // Adjust the path accordingly
            echo "<div class='skill-description'>";
            if (file_exists($pdfFilePath)) {
                echo "<a href='".$pdfFilePath."' target='_blank'>{$niveau}</a>";
            } else {
                echo $niveau;
            }
            echo "</div>";
        }

        echo "</div>\n";
    }

    echo "</div>";
}

echo "</div>";
?>
