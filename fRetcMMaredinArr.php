<?php
/*
 *sa se scrie o functie ce returneaza cel mai mare numar dintr-un array
 *
 *etape pt rezolvare:

  *

 */
$a = array("2", "7", "3", "4", "1", "8","99", "5");
$a_count = count($a);
$max=0;

for ($i=0;$i<count($a)-1;$i++) {
    if ($a[$i]>$max){
    $max= $a[$i];
    }
       }

print $max;
?>


