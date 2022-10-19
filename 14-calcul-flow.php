<?php
if(isset($_POST['numeroA'],$_POST['choix'],$_POST['numeroB'],)){
    // exemple si on a envoyé le formulaire
    $reponse ="formulaire envoyé";

    // vérification des champs (!! on ne peut pas diviser par 0)
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
    <h1>Calculatrice</h1>
    <h2>Exercice calculatrice</h2>
    <p>Créez une branche et un nouveau fichier dans 14-exe/14-calcul-{prénom}.php<br>
Envoyez-moi le git pull request sur notre dépôt de la classe</p>
    <p>$reponse doit contenir la réponse au calcul, ou l'erreur de calcul ou de fonctionnement</p>
    <form action="14-calcul-flow.php" method="POST">
        <input type="number" name="Choisis un nombre" id="numeroA/">
        <select name="choix" id="choix">
            <option value="addition">+</option>
            <option value="soustraction">-</option>
            <option value="multiplication">*</option>
            <option value="division">/</option>
        </select>
        <input type="number" name="second" id="numeroB"/>
        <input type="submit" value="Calculer"/>
    </form>

    <div id=resultat></div>



    <?php
    
    
    function addition( $nombreA , $nombreB)
     {
        $reponse = $nombreA + $nombreB ;
        return $reponse ;
        console.log("$reponse");
        echo addition() ;
     }  
     function soustraction( $nombreA ,$nombreB)
     {
        $reponse = $nombreA - $nombreB
        return $reponse ;
        console.log("$reponse");
        echo soustraction() ;

     }


     if(isset($_nombreA.$_choix.$_nombreB,){
        // exemple si on a envoyé le formulaire
        $reponse ="formulaire envoyé";
     // vérification des champs (!! on ne peut pas diviser par 0)
     endif;
    }

    <p>ou alors</p>

    <?php

//if(isset($_nombreA.$_choix.$_nombreB,){

     function calculatrice($x,$y){

//variable contenant le premier chiffre ou nombre,
//variable contenant le deuxieme nombre
$x= <input type ="xvalue"/> ;
$y= <input type ="yvalue"/> ;
echo $_GET["xvalue"];
echo $_GET["yvalue"];
}
   ?>

    

        //echo $value;
    //tendif;
    ?>
    <hr>    
    <?php
    var_dump($_POST);
    ?>
   </body>
    </html>
       
       

    

        //echo $value;
    //tendif;
    ?>
    <hr>    
    <?php
    var_dump($_POST);
    ?>
   </body>
    </html>