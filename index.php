<?php
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);

// 1

$nbrDico = count($dico);
echo "Il y a ".$nbrDico." mots dans le dictionnaire"."<br>";

// 2

$nbrLettres = 0;
foreach ($dico as $mot) {
    if (strlen($mot) == 15) {
        $nbrLettres++;
    }
}
echo "Il y a ".$nbrLettres." mots qui contiennent 15 lettres"."<br>";

// 3

// $nbrMots = 0;
// $findW = 'w';
// foreach ($dico as $mot) {
//     if (strpos($mot, $findW) == true) {
//         $nbrMots++;
//     }
// }

$nbrMots = 0;
foreach ($dico as $mot) {
    if (str_contains($mot, 'w')) {
        $nbrMots++;
    }
}

echo "Il y a ".$nbrMots." mots qui contiennent la lettre W"."<br>";

?>