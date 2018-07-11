<?php

    require_once "calculadora.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CALCULADORA IP</title>
</head>
<body>

<form action="calculadora.php" method="post">
    <input style="border:1px solid red;   line-height: 2; padding: 0 5px; width: 200px;" type="text" size="3" maxlength="3" name="parte1">
    <input style="border:1px solid green; line-height: 2; padding: 0 5px; width: 200px;"type="text" size="3" maxlength="3"  name="parte2">
    <input style="border:1px solid green; line-height: 2; padding: 0 5px; width: 200px;"type="text" size="3" maxlength="3" name="parte3">
    <input style="border:1px solid green; line-height: 2; padding: 0 5px; width: 200px;"type="text" size="3" maxlength="3" name="parte4">
    <input style="border:1px solid green; line-height: 2; padding: 0 5px; width: 200px;"type="text" name="mascara" placeholder="Insira uma Máscara ">
    <input tyle="border:1px solid green; background: green; color: #fff; font-weight: 700; cursor: pointer; line-height: 2; padding: 0 5px;" type="submit" name="enviar">
</form>

</body>
</html>
