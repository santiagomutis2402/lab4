<?php

$porcentaje = "";
$imagen = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $porcentaje = $_POST['porcentaje'];
    if ($porcentaje >= 80) {
        $imagen = "../feliz.png";
    } elseif ($porcentaje >= 50 & $porcentaje <= 79) {
        $imagen = "../meh.png";
    } else {
        $imagen = "../enojado.png";
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
    <form action="index.php" method="POST">
        <h1>Ingrese su porcentaje de ventas</h1>
        <input type="number" min="0" max="100" name="porcentaje">
        <br>
        <input type="submit" value="enviar">
    </form>

    <img src="<?php echo $imagen ?>" alt="">
</body>

</html>