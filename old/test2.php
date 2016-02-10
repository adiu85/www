<?php
$array_selectie = array("a", "b", "c", "d");
echo "<select name=\"alege\">";
$i = 0;
while ($i <= 3) {
    echo "<option value=" . $i . ">" . $array_selectie[$i] . "</option>";
    $i++;
}
?>
