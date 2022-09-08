<?php
$Num = '';
$factorial = 1;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $Num = $_POST['Num'];

  for ($i = 1; $i <= $Num; $i++) {
    $factorial = $factorial * $i;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <h1>Ingrese un numero</h1>
        <input type="number" min="0" name="Num" />

        <br />

        <input type="submit" value="enviar" />
    </form>
    <h1>Su respuesta es : <?php echo $factorial ?></h1>

</body>

</html>