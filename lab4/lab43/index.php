<?php

$Num = "";
$mayor = '';
$mensaje = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $campo = $_POST['num'];
    $mayor = max($campo);
    $tamano = count($campo);
    $posicion = array_search($mayor, $campo);
    $arunicos = array_unique($campo);
    if ($tamano > $arunicos) {
        $mensaje = "No ingrese numeros repetidos";
    } else {
        $mensaje = "El mayor numero es: $mayor en la posicion: $posicion";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <?php for ($i = 1; $i <= 3; $i++) : ?>
        <h1>Ingresa el numero en la posicion: <?php echo $i  ?></h1>
        <input type="number" name="num[]">

        <br>
        <br>
        <?php endfor; ?>
        <input type="submit" value="enviar">
    </form>
    <h1><?php echo $mensaje ?></h1>
</body>

</html>