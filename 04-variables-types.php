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
<h2>les numériques</h2>
<p>les numériques sont des variables les plus utilisées pour les calcukls, il existe plusieurs sous-type de ceux-ci</p>
<h3>les entiers (intégrer,int)</h3>
<p>sont des entiers les nombres sans virgules, positifs comme négatifs</p>
<?php
$myFirstInt = 22 ;
$mySecondInt = -7;

echo $myFirstInt;
echo"<br>";

//addiction
$add =$myFirstInt +$mySecondInt;
echo $add;
echo "<br>";


//soustraction
$sous =$myFirstInt - $mySecondInt;
echo $sous;
echo "<br>";

//multiplication 
$multi = $myFirstInt *$mySecondInt;
echo $multi;
echo "<br>";

//division
$div =$myFirstInt /$mySecondInt;
echo $div;
echo "<br>";


?>

<h3>Les chiffres à virgules ( float, double, nombres réels </h3>
<p>Ils ont le type float, attention en cas de calcul en base 10, on peut avoir des erreurs dues au fait que les ordinateurs travaillent sur les calculs en base 16  ! <br>
On utilise le "." et la "," comme séparateur ! <a href="https://floating-point-gui.de/"target ="_blank"> What Every Programmer should know about floating-point arithmétic</a></p>

<?php
$firstFloat =8.27;
$secondFloat = -79.789435185755468; //il manque 3 caractères

?>

<h2>Les boléens (bool, boolean) </h2>
<p>Variable représentant sur un seul bit les 2 possibilités du binaire: true ou false</p>
<?php
$bool1 = true;
$bool2 = false;
?> <hr>
<h2>Les types NULL (NULL)</h2>
<p>le type NULL est une variable sans valeurs</p>

<?php 

$nada = NULL

?>

<h2> les types tableaux (array)</h2>
<p>Les tableaux permettent de contenir plusieurs variables à l'intérieur d'un variable de type array.Ils sont multidimentionnels, cad on peut avoir autant de tableau que necessaire dans un tableau.</p>
<p>Il existe 2 types de tableaux : Les tableaux indexées, et les tableaux associatifs</p>

<h3>tableau indexé</h3>
<p>Il ne contient que les valeurs, les clefs sont attribuées par PHP</p>

<?php
$tab1 =array(5,"lulu", "Dupuis",true);
//débiguage de tableaux ou objets avec print_r, moins complet que le var_dump
print_r($tab1);
//on veut afficher la 2eme clef:
echo $tab1 [1]
?>
<h3>Tableau associatif</h3>
<p>Tableau dont on a indiqué au moins une des clefs, ce qui en fait un tableau associatif</p>
<?php
//creation d'un tableau associatif
$tab2 =array("un"=>1,
                "deux"=>2,
                    "trois"=>3,
                        4 =>"coucou",
                        "lala",
            );
//Déboguage de tableaux ou objets avec print_r, moins complet que var_dump


            print_r($tab2);
            echo $tab2["deux"];
?>

<hr>
<?php
//outil de béboguage le plus commun
var_dump($myFirstInt,$mySecondInt,$monTitre, $add, $sous, $multi, $div,$firstFloat,
$secondFloat,$bool1,$bool2,$nada,$tab1,$tab2);

?>


</body>
</html>