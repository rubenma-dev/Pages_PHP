<?php

if($_POST){

    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    //Suma
    $suma=$valorA+$valorB;
    //Resta
    $resta=$valorA-$valorB;
    //Division
    $division=$valorA/$valorB;
    //Multiplicacion
    $multiplicacion=$valorA*$valorB;
    
    echo "<br/>".$suma;
    echo "<br/>".$resta;
    echo "<br/>".$division;
    echo "<br/>".$multiplicacion;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>
    
    <form action="ejercicio8.php" method="post">
        valor A:
        <input type="text" name="valorA" id="">
        <br/>
        valor B:
        <input type="text" name="valorB" id="">
        <br/>
        <input type="submit" value="Calcular">

    </form>

</body>
</html>