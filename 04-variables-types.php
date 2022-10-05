<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>les types de variables</h1>
    <h2>les strings (text)</h2>
    <p>Les chaînes de caractères sont mises dans des variables de types string ou str, ce sont les variables les plus utilisées pour l'affichage de texte dans les sites web.</p>
<p>On peut les utiliser et les mettre une à la suite de ....cela s'appelle la concaténation.</p>
<?php
//création de la variable (ici en camelCase), avec le = qui donne la valeur. En procédural le typage strict n' est pas obligatoire.
$monTitre = "Bientôt la fin de ce cours interminable";
//Affichage du contenu de la variable avec une chaîne concaténée (utilisation du point ou de la virgule)-gettype est une fonction permettant de récupérer le typage d'une variable (en PHP 8 on utilisera putôt get_debug_type())
echo $monTitre. " Yes! <br>";
echo "le type de la variable est " .gettype($monTitre).' !';
?>
<p>Il existe des centaines de foctions pour gérer du texte, par exemple </p>
<?php
echo 'mettre tout en majuscule : strouppers ($monTitre)' .strtoupper($monTitre);
?>
<p><a href="https://www.php.net/manual/fr/book.strings.php"target="_blank">string</a></p>


</body>
</html>