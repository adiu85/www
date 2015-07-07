<?php
/*------------------------------         NU este facut!!!!
 *
 * Created by PhpStorm.
 * User: adi
 * Date: 2/28/2015
 *  * Time: 6:33 PM
 * Write a function that tests whether a string is a palindrome
 *
 *
 * impartim lungimea stringului la 2.
 * elementele din prima jumatate, in ordine crescatoare, trebuie sa fie identice cu ele din a doua jumatate, in ordine descrescatoare.
 *
 * intr un array trecem elementele din prima jumatate
 * in alt array elementele ramase.
 *
 * comparam elementul a[0] cu b[count-1]
 *                    a[1] cu b[count-2]
 *                    a[count/2-1] cu b[count/2 +1]
 *
 */

$a = "elefaccafele";
$a_str = str_split($a);
$a_count = count($a_str);

$a_reverse="";

for($i=$a_count-1;$i>=0;$i--){
    $a_reverse.=$a_str[$i];
}
if($a==$a_reverse) {
    echo "este palindrom";
}
else{
    echo "NU este";
}
?>