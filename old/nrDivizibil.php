<?php
$nr = 450;
$x = 5;
$rest = $nr % $x;
echo "$rest";
if ($rest == 0) {
    echo "$nr este divizibil la 5";
} else {
    echo "$nr nu este divizilbil la 5 sau 0";
}
?>