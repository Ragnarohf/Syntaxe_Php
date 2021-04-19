<?php


$chaine = "bonjour Jean-Michel";
//les @ ou # nous servent de séparateurs vous pouvez choisir ce que vous voulez
$patern = '@Jean-Michel@';
$patern2 = '#jean-michel#';
$patern3 = '#jean-michel#i';
$patern4 = '#Jean-Michel|Bernard#'; // recherche Jean-Michel ou Bernard
//$patern3 = '#jean-michel#i'; 
//utilisation de preg_match => renvoie true ou false / 1 ou 0
// preg_match(regex,laChaineTest)
var_dump(preg_match($patern,$chaine));// OK
var_dump(preg_match($patern2,$chaine));// la casse est stricte
var_dump(preg_match($patern3,$chaine));// i est une option qui permet d'ignorer la casse

$patern5 = '#^bonjour#';// ^ = en début de chaine
$patern6 = '#Michel$#';// $ = en fin de chaine
var_dump(preg_match($patern5,$chaine));
var_dump(preg_match($patern6,$chaine));
//les classes de caractères
$patern7 = '#[a-z]#';
$patern8 = '#[0-9]#';
$patern9 = '#[a-z0-9]#';
$patern10 = '#[^0-9]#';//option de négation
var_dump(preg_match($patern7,$chaine));// Oui il y a des caractères alphanum minuscules
var_dump(preg_match($patern8,$chaine));// Non il n'y a pas de chiffres
var_dump(preg_match($patern9,$chaine));// Oui il y a des caractères alphanum minuscules OU des chiffres
var_dump(preg_match($patern10,$chaine));// Oui il N'Y A PAS de chiffres
// definir un nombre de caractères limite

$chaine2 = "azertyu"; // 7 caractères
$patern11 = '#^[a-z]{7}$#'; // ne marchera pas si pas de conditions de début et fin (^$)
var_dump(preg_match($patern11,$chaine2));// Oui il N'Y A PAS de chiffres

// certains caractères doivent êtres échapés pour être testés :
// # ! ^ $ ( ) [ ] { } ? + * . \

/*
//[0-9] equivaut à [0123456789]
//[a-z] equivaut à [abcde...xyz]
//[A-Z] equivaut à [ABCDE...XYZ]

//[0-9] signifie recherche d'un chiffre de 0 à 9
//[^0-9] signifie recherche tout ce qui n'est pas un chiffre de 0 à 9

\w	Représente tout caractère de « mot ». Équivalent à [a-zA-Z0-9_]
\W	Représente tout caractère qui n’est pas un caractère de « mot ». Equivalent à [^a-zA- Z0-9_]
\d	Représente un chiffre. Équivalent à [0-9]
\D	Représente tout caractère qui n’est pas un chiffre. Équivalent à [^0-9]
\s	Représente un caractère blanc (espace, retour chariot ou retour à la ligne)
\S	Représente tout caractère qui n’est pas un caractère blanc
\h	Représente un espace horizontal
\H	Représente tout caractère qui n’est pas un espace horizontal
\v	Représente un espace vertical
\V	Représente tout caractère qui n’est pas un espace vertical
*/
//exemple de patern mail :
// #^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#
//exemple de patern password :
// \S equivaut à tout ce qui n'est pas un espace
// \s equivaut à un espace
// #^\S*(?={8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[0-9])(?=\S*[\W])\S*$#




