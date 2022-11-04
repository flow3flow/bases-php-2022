<?php
include "22-functions.php";
//déboguage de la variable post
if(isset($_POST['num1'],$_POST['num2'],$_POST['op'])){

    $num1=($_POST['num1']);
    $num2=($_POST['num2']);
    $op=($_POST['op']);

$resultat = calculBasic($num1,$num2,$op);
}
;//   "Utiliser notre calculette;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de nos fonctions</title>
</head>
<body>
    <h1>Test de nos fonctions</h1>
    <h2>Calculatrice</h2>
    <p>Exercice - enregistrez ce fichier sous 22-appel-{prenom}.php mettez ici un formulaire à 2 entrées et un select avec + - * /</p>
    <p>Lorsqu'on clique sur envoyer, le formulaire est envoyé par POST, et le résultat s'affiche en dessous</p>
    <p>Bonus, changez la fonction pour afficher par exemple :<br> 25/5 = 5</p>

<form name="calcul" method="POST">
<input type="text" name="num1" />
<select name="op">
    <option value="addition">+</option>
    <option value="soustraction">-</option>
    <option value="division">/</option>
    <option value="multiplication">*</option>
</select>
    <input type="text" name="num2" />
    <input type="submit" value="Calculer"/>
    </form>
    <?php

    //si le résultat existe affiche le résultat
        if(isset($resultat))
        echo $resultat
    ?>

<?php

?>

    
</body>
</html>