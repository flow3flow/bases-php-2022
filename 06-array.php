<?php
$tab =[
    5,
    8,
    "coucou",
    false,
    27.12,
    [
        "coucou",
        "Vous",
        "allez",
        "bien?",
        [9,
        "yes",
        "je vais bien!",
    ],        
],
        
    
];

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>

<h1>Array</h1>
<p> les tableaux sont la base de gestion des données en PHP, comme la pluspart des languages. </p>
<p> On pourra également utiliser des objets, des fichiers json ou xml pour faire la même chose , mais en PHP le tableau restera le principal format pour gérer rtoutes les données. </p><br>
    <p>On a deux manière de créer des tableaux:</p>
    <pre><code>
$tab =array(); //manière longue
$tab = [];  //manière courte 
</code></pre>


<h2>Les tableaux indexées</h2>
<p>Tableaux dont les clefs ne sont pas créées par l'utilisateur, mais par PHP</p>
<pre><code>
    
// affichage avec print_r

<?php
print_r($tab);
?>
</code></pre>
 <p> Pour afficher les valeurs manuellement d'un tableau indexé, on utilise le nom de la variable avec des $var [clef]</p>
 <pre><code>
    echo$tab[2]."".$tab[5][1].".$tab[5][2]."".$tab[5][3]."<br>.donne :
    <?=
     echo$tab[2]."".$tab[5][1]."".$tab[5][2]."".$tab[5][3]."<br>.donne :
 </code></pre>
</p>    
</body>
</html>