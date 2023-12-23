<?php
$data = yaml_parse_file("../assets/data/navbar.yaml");
$style = "color: #ffffff;";
echo "<div id='navbar'>";
foreach ($data as $itemlist) {
    echo "<ul>";
    for ($i = 1; $i <= 4; $i++) { // $i <= 4 car 4 logos
        $item = "item" . $i;
        echo "<li><i class='" . $itemlist[$item] . "' style='" . $style . "'></i></li>";
    }
    echo "</ul>";

    echo "<ul>";
    for ($i = 1; $i <= 6; $i++) { // $i <= 6 car 6 rubriques
        $rubrique = "rubrique" . $i;
        $href = strtolower(str_replace(' ', '', $itemlist[$rubrique])); // Convertir le nom des rubriques en href de type "A propos" -> "apropos"
        echo "<li><a href='" . "#anchor".$href . "'>" . $itemlist[$rubrique] . "</a></li>";
    }
    echo "</ul>";
}
echo "</div>";
echo "<hr class='splitbar'>";
?>