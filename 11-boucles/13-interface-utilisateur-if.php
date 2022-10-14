<?php 
// débogage de la variable
var_dump($_POST)

/*si il existe la variable $POST nommée température (utilisation de isset) - Dans notre cas 
$*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Température</title>
</head>
<body>
    <h1>Températures</h1>
    <form name="temperature" method="POST" action="">
        <p>Bonjour, quel est la température dehors ?</p>
        <input type="number" name="temperature" placeholder="Mettez la tepérature dehors">
        <br>
        <input type="submit" value="Evoyer">
</body>
</html>