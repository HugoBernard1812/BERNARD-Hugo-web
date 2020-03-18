<?php
/**
 * File:  allo.php
 * Creation Date: 09/09/2014
 * description: un exemple élémentaire
 *
 * @author: canals
 */

 echo "<!DOCTYPE html>\n";
 echo "<html lang =\"fr\">\n";
 echo "<head>\n";
 echo "<meta charset=\"utf-8\"/>\n";
 echo "<title>allo</title>\n";
 echo "</head>\n";

 echo "<body>\n";
echo "<h1> Allo le monde ?</h1>\n"  ;
print "<h2>a l'eau, limande ?</h2>\n";

$uneVariable = "<h3>menthe</h3>\n" ;

print $uneVariable . "<h4>Halo</h4>\n" ;

$v1 = 42;

$v2 = 73;

echo (($v2) + ($v1)), "\n";
echo (($v2) - ($v1)), "\n";

echo gettype($v1), "\n";
echo gettype($v2), "\n";

$v1 = "442";

echo (($v2) + ($v1)), "\n";

$v1 = 1337;
print "La variable "'$v1'" est de type" .gettype($v1)." et a pour valeur" ."$v1";
$v2 = 01337;
print "La variable "'$v2'" est de type" .gettype($v2)." et a pour valeur" ."$v2";
$v3 = 0x1337;
print "La variable "'$v3'" est de type" .gettype($v3)." et a pour valeur" ."$v3";
$v4 = 3.14159;
print "La variable "'$v4'" est de type" .gettype($v4)." et a pour valeur" ."$v4";
$v5 = "yopyop";
print "La variable "'$v5'" est de type" .gettype($v5)." et a pour valeur" ."$v5";
$v6 = 'yepyep';
print "La variable "'$v6'" est de type" .gettype($v6)." et a pour valeur" ."$v6";
$v7 = True;
print "La variable "'$v7'" est de type" .gettype($v7)." et a pour valeur" ."$v7";
$v8 = False;
print "La variable "'$v8'"est de type" .gettype($v8)." et a pour valeur" ."$v8";

"variable v1 : $v1";
'variable v2 : $v2';

$v1=42;

$v2=73;

print "la variable "'$v1'" vaut 42";
print "la variable "'$v2'" vaut 73";

echo "</body>\n";
echo "</html>\n";

?>
