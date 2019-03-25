<?php

/* Code regex: https://regex101.com/r/UHKYKg/3 */
/* Code en PHP: */

$re = '/[\d<>+*\-\/=()]/';
$str = '';
$subst = '';

$result = preg_replace($re, $subst, $str);

echo "The result of the substitution is ".$result;

?>