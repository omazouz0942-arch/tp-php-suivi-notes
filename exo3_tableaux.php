<?php


require 'config.php';
function mention($note) {
    if ($note >= 16) return "Très bien";
    if ($note >= 14) return "Bien";
    if ($note >= 12) return "Assez bien";
    if ($note >= SEUIL) return "Passable";
    return "Ajourné";
}

echo "<h2>Exercice 3.1 : Création</h2>";

// Tableau associatif des notes
$notes = [
    "Mohamed" => 16, "Ahmed" => 14, "Hind" => 13, "Aicha" => 15,
    "Samir" => 13, "Zakaria" => 13, "Rafik" => 10, "Ilham" => 9,
    "Hamza" => 7, "Sami" => 7, "Noura" => 14
];

// Tableau indexé des modules
$modules = ["PHP", "JavaScript", "HTML/CSS"];

echo "<b>Affichage de \$modules avec foreach :</b><br>";
foreach ($modules as $mod) {
    echo "- $mod <br>";
}

echo "<br><b>Affichage de \$modules par indice :</b><br>";
for ($i = 0; $i < count($modules); $i++) {
    echo "Module $i : " . $modules[$i] . "<br>";
}

echo "<h2>Exercice 3.2 : Affichage HTML</h2>";
?>

<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Note</th>
            <th>Mention</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($notes as $nom => $note): ?>
            <tr style="<?php echo ($note < SEUIL) ? 'color: red;' : ''; ?>">
                <td><?php echo $nom; ?></td>
                <td><?php echo $note; ?></td>
                <td><?php echo mention($note); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
echo "<h2>Exercice 3.3 : Statistiques</h2>";

$somme = 0;
$effectif = 0;
$max_note = -1;
$min_note = 21;

foreach ($notes as $nom => $note) {
    $somme += $note;
    $effectif++;
    if ($note > $max_note) $max_note = $note;
    if ($note < $min_note) $min_note = $note;
}
$moyenne = $somme / $effectif;

echo "Somme calculée : $somme <br>";
echo "Moyenne calculée : " . number_format($moyenne, 2) . " <br>";
echo "Meilleure note : $max_note <br>";
echo "Plus faible note : $min_note <br><br>";

echo "<b>Vérification avec fonctions PHP :</b><br>";
echo "array_sum : " . array_sum($notes) . "<br>";
echo "count : " . count($notes) . "<br>";
echo "max : " . max($notes) . "<br>";
echo "min : " . min($notes) . "<br><br>";

$effectifs = [
    "Très bien" => 0,
    "Bien" => 0,
    "Assez bien" => 0,
    "Passable" => 0,
    "Ajourné" => 0
];

foreach ($notes as $note) {
    $m = mention($note);
    $effectifs[$m]++;
}

echo "<b>Effectifs par mention :</b><br>";
foreach ($effectifs as $m => $count) {
    echo "$m : $count apprenant(s)<br>";
}

echo "<h2>Exercice 3.4 : Tri</h2>";

function afficher($tab) {
    echo "<ul>";
    foreach ($tab as $nom => $note) {
        echo "<li>$nom : $note</li>";
    }
    echo "</ul>";
}

$temp = $notes;
ksort($temp);
echo "<b>1. Tri par noms croissants (ksort) :</b>";
afficher($temp);

$temp = $notes;
arsort($temp);
echo "<b>2. Tri par notes décroissantes (arsort) :</b>";
afficher($temp);

$temp = $notes;
krsort($temp);
echo "<b>3. Tri par noms décroissants (krsort) :</b>";
afficher($temp);

$temp = $notes;
asort($temp);
echo "<b>4. Tri par notes croissantes (asort) :</b>";
afficher($temp);

echo "<h2>Exercice 3.5 : Opérateurs de tableaux</h2>";

$a = ["x" => 1, "y" => 2];
$b = ["y" => 2, "x" => 1];

echo "\$a + \$b : <br>";
var_dump($a + $b);
echo "<br><br>\$a == \$b : <br>";
var_dump($a == $b);
echo "<br><br>\$a === \$b : <br>";
var_dump($a === $b);
echo "<br><br>";

/*
  Explications :
  - $a + $b : Union. Les clés de $a sont conservées, celles de $b ayant les mêmes clés sont ignorées.
  - $a == $b : Égalité. Renvoie true car ils ont les mêmes paires clé/valeur.
  - $a === $b : Identité. Renvoie false car l'ordre des éléments n'est pas le même.
*/