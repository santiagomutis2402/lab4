<?php

$Num = '';
$mensaje = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Num = $_POST['Num'];

    foreach ($Num as $x)
        if ($x % 2 == 0) {
            $mensaje = "exito";
        } else {
            $mensaje = "error ingrese un numero valido";
        }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab 44</title>
</head>

<body>
    <h1>Ingrese un numero par</h1>
    <form action="" method="POST">
        <?php for ($x = 0; $x <= 2; $x++) : ?>

        <input type="number" name="Num[]" value="<?php echo $Num[$x] ?>">
        <h2><?php echo $mensaje ?></h2>
        <br>
        <br>
        <?php endfor; ?>

        <input type="submit" value="enviar">
    </form>
</body>

</html>