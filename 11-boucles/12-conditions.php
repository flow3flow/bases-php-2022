<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions</title>
</head>
<body>
    <h1>Conditions</h1>
    <h2>if (conditions), si</h2>
    <p>Plus basiques que les boucles, les conditions sont cependant la base de tous les languages informatiques.
        Le if va vérifier que tous les parametre(s) passée. (s) entre () valent true (boolean) </p>
    <pre><code>
        if(condition1) {// si la condition est vraie ;
    
        echo "true";
        }
    
    </code></pre>

    <?php
    $nombre =mt_rand(0,20);
    //si $nombreest plus petitque 10 affichez le "$nombre est plus petit que 10"
    if($nombre<10){
        echo "$nombre est plus petit que 10";
    }
    ?>
    <p>une condition peut être complexe, et donc utiliser les && (et), || (ou),! (contraire de) et XOR (^ ou stricte) 
        voir <a href="https://www.php.net/manual/fr/" target="_blank">opérateur logiques</a></p>

        <?php
        //si la variable est initialisée (isset) (ici $nombre existe)
        if(isset($nombre)&& $nombre >5 && $nombre <15) {
            echo "$nombre existe et est plus grand que 5 et plus petit que 15";
        }
        ?>

        <h2>elde -sinon</h2>
        <p>C'est l'exécution du code si jamais le if qui précède est à false</p>
        <?php
        $tem = mt_rand(-20,20);
        echo"<h4>Il fait $temp ° dehors </h4>"
        if($temp <=0) {
            echo "il gèle dehors !"
        }else {
            echo "Il ne gèle pas pour le moment"
        
        <>
    </p>

    <h2></h2>
    
</body>
</html>