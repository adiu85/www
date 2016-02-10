<?php
$array_numere = array("a", "b", "c", "d", "e", "f");
echo "<select name=\"numar\">";
$i = 0;
while ($i <= 3) {
    echo "<option value=" . $i . ">" . $array_numere[$i] . "</option>";
    $i++;
}
?>
