<?php


require 'config.php';

// --- Partie 0 : Test Hello PHP et Commentaires ---
echo "Hello PHP<br><br>";

// Commentaire sur une ligne (//)
# Commentaire sur une ligne (#)
/* 
   Commentaire sur 
   plusieurs lignes 
*/

// --- Exercice 1.1 : Noms de variables ---
/*
  Les variables valides sont : $x, $_x, $Prix_HT, $état
  Invalides :
  - $2x : commence par un chiffre
  - $x-y : contient l'opérateur '-'
  - $prix ht : contient un espace
*/

$x = 10;
$_x = 20;
$Prix_HT = 100;
$état = "OK";

// Sensibilité à la casse
$a = "valeur 1";
$A = "valeur 2";
echo "\$a = $a | \$A = $A<br><br>";

// --- Exercice 1.2 : Constantes ---
echo "Établissement : " . ETABLISSEMENT . "<br>";
echo "NOTE_MIN: " . NOTE_MIN . " | NOTE_MAX: " . NOTE_MAX . " | SEUIL: " . SEUIL . "<br>";
echo "SEUIL définie ? " . (defined('SEUIL') ? "Oui" : "Non") . "<br>";
echo "INCONNUE définie ? " . (defined('INCONNUE') ? "Oui" : "Non") . "<br><br>";

// --- Exercice 1.3 : Calcul ---
$prix_ht = 60;
$tva = 20;
$prix_ttc = $prix_ht * (1 + $tva / 100);
echo "Le prix TTC du produit est de $prix_ttc €.<br><br>";

// --- Exercice 1.4 : Types et conversions ---
$test = 42;
$test_str = (string)$test;
var_dump($test_str);
echo "<br>";

var_dump((bool)0); echo " | ";
var_dump((bool)0.0); echo " | ";
var_dump((bool)"0"); echo " | ";
var_dump((bool)""); echo " | ";
var_dump((bool)"abc"); echo " | ";
var_dump((bool)[]); echo " | ";
var_dump((bool)null); echo "<br>";

var_dump((int) 3.9); echo " | ";
var_dump((int) "12abc"); echo " | ";
var_dump((float) "1.5e3"); echo " | ";
var_dump((int) true); echo "<br>";

$dec = 255;
$hex = 0xFF;
$oct = 0377;
$bin = 0b11111111;
echo "Décimal: $dec | Hexa: $hex | Octal: $oct | Binaire: $bin<br><br>";

// --- Exercice 1.5 : Chaînes de caractères ---
$traitees = "égales à";
$ici = 2;

echo "1. Ahmed a dit : \"J'ai réussi\"<br>";
echo '2. Voulez-vous supprimer C:\*.*?<br>';
echo "3. Ceci n'affichera pas \\n de nouvelle ligne<br>";
echo '4. Les variables ne seront pas $traitees $ici<br>';
echo "5. Les variables seront $traitees $ici<br><br>";

$chaine = "*Bonjour les développeurs*";
echo trim($chaine, "*") . "<br><br>";

$mot = "PHP";
for ($i = 0; $i < strlen($mot); $i++) {
    echo $mot[$i] . "<br>";
}
