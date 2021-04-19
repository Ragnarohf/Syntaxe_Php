<?php

//definir le timezone
date_default_timezone_set("Europe/Paris");
//ecrire une date a l'isntant T 
echo date("D,d/m/Y h:i:s") . "<br>";; // y 
// echo date("d-m-Y");

//liste de date merci Pierre Giraud
// Caractère	Signification
// d	Représente le jour du mois en deux chiffres (entre 01 et 31)
// j	Représente le jour du mois en chiffres sans le zéro initial (de 1 à 31)
// D	Représente le jour de la semaine en 3 lettres (en anglais)
// l (L minuscule)	Représente le jour de la semaine en toutes lettres (en anglais)
// N	Représente le jour de la semaine en chiffre au format ISO-8601 (lundi = 1, dimanche = 7)
// w	Représente le jour de la semaine en chiffre (dimanche = 0, samedi = 6)
// z	Représente le jour de l’année de 0 (1er janvier) à 365
// W	Représente le numéro de la semaine au format ISO-8601 (les semaines commencent le lundi)
// m	Représente le mois de l’année en chiffres avec le zéro initial (de 01 à 12)
// n	Représente le mois de l’année de chiffres sans le zéro initial (de 1 à 12)
// M	Représente le mois en trois lettres en anglais (Jan, Feb…)
// F	Représente le mois en toutes lettres en anglais
// t	Représente le nombre de jours contenus dans le mois (de 28 à 31)
// Y	Représente l’année sur 4 chiffres (ex : 2019)
// y	Représente l’année sur 2 chiffres (ex : 19 pour 2019)
// L	Renvoie 1 si l’année est bissextile, 0 sinon
// a et A	Ajoute « am » ou « pm » (pour a) ou « AM » ou « PM » (pour A) à la date
// h	Représente l’heure au format 12h avec le zéro initial
// g	Représente l’heure au format 12h sans zéro initial
// H	Représente l’heure au format 24h avec le zéro initial
// G	Représente l’heure au format 24h sans le zéro initial
// i	Représente les minutes avec le zéro initial
// s	Représente les seconds avec le zéro initial
// v	Représente les millisecondes avec le zéro initial
// O et P	Indique la différence d’heures avec l’heure GMT sans deux points (pour O, ex : +0100) ou avec deux points (pour P, ex : +01:00)
// I (i majuscule)	Renvoie 1 si l’heure d’été est activée, 0 sinon
// c	Représente la date complète au format ISO 8601 (ex : 2019-01-25T12:00:00+01:00)
// r	Représente la date complète au format RFC 2822 (ex : Fri, 25 Jan 2019 12 :00 :00 +0100)
// Z	Représente le décalage horaire en secondes par rapport à l’heure GMT
// definir la langue
setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
// strftime() permet d'tutiliser la gestion de langue pour l'affichage des  dates
echo strftime("%A") . "<br>";
echo strftime("%A %d-%m-%Y %I:%M:%S") . "<br>";

echo "LES TIMES STAMP <br>";
$semaine = 7 * 24 * 60 * 60;
$timestampNow = time();
$ilYAUneSemaine = $timestampNow - $semaine;
echo "le timestamp d'il y a une semaine : " . $ilYAUneSemaine . "<br>";
//getdate transforme mon times en tableau
$tbTime = getdate($ilYAUneSemaine);
print_r($tbTime);
//pour ecrire ma date dans un format lisible mais trés lourds:
echo $tbTime['weekday'] . "," . $tbTime["mday"] . "-" . $tbTime['mday'] . "...<br>";

//version plus soft
echo date('D, d-m-y h:i:s', $ilYAUneSemaine) . "<br>";


// 