<?php
$Num = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Num = $_POST['num'];
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
    <form action="" method="POST">
        <h1>Ingrese el tamaño de la matriz</h1>
        <input type="number" step="2" min="0" name="num">
        <br>
        <br>
        <input type="submit">
    </form>
    <br> <br>
    <?php

    $unit = 1 ?>

    <table border="1px">
        <?php for ($i = 1; $i <= $Num; $i++) : ?>
        <tr>
            <?php for ($j = 1; $j <= $Num; $j++) : ?>

            <?php if ($unit == $j) : ?>
            <td>1</td>
            <?php else : ?>
            <td>0</td>
            <?php endif; ?>
            <?php endfor; ?>
            <?php $unit = $unit + 1; ?>

        </tr>

        <?php endfor; ?>
    </table>
</body>

</html>