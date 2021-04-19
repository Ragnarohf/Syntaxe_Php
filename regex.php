<?php $chaine = "bonjour jean";
$patern = "#jean#"; //  # @

var_dump(preg_match($patern, $chaine));
$patern2 = "@[a-z]@"; //"@[azertyyuiposdfgghj]@";
var_dump(preg_match(
    $patern2,
    $chaine
));
$patern3 = "@[A-Z]@";
var_dump(preg_match(
    $patern3,
    $chaine
));
$patern4 = "@[0-9]@"; //INVERSE  "@[^0-9]@"
var_dump(preg_match(
    $patern4,
    $chaine
));
$patern5 = "@[0-9a-zA-Z]@";
var_dump(preg_match(
    $patern5,
    $chaine
));
$chaine2 = "76200";
$patern6 = "@[0-9]{5}@"; //{x} determine le nb de caractere voulu
var_dump(preg_match(
    $patern6,
    $chaine2
));
