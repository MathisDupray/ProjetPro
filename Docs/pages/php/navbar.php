<?php
$data = yaml_parse_file("../assets/data/navbar.yaml");
$style = "color: #ffffff;";
echo "<div id='navbar'>";
foreach ($data as $itemlist) {
    echo "<ul>";
    for ($i = 1; $i <= 4; $i++) {
        $item = "item" . $i;
        echo "<li><i class='" . $itemlist[$item] . "' style='" . $style . "'></i></li>";
    }
    echo "</ul>";

    echo "<ul>";
    for ($i = 1; $i <= 6; $i++) {
        $rubrique = "rubrique" . $i;
        $href = strtolower(str_replace(' ', '', $itemlist[$rubrique])); // Remove spaces and convert to lowercase
        echo "<li><a href='" . "#anchor".$href . "'>" . $itemlist[$rubrique] . "</a></li>";
    }
    echo "</ul>";
}
echo "</div>";
echo "<hr class='splitbar'>";
?>