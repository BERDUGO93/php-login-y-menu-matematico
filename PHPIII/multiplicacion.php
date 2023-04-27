<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
<h1>---- Operacion Multiplicacion---- </h1>

<label>Número 1:</label>
		<input type="number" name="numero1"><br>
		<label>Número 2:</label>
		<input type="number" name="numero2"><br>
        <input type="submit" name="submit" value="Calcular">
</form>
</body>
</html>
<?php   
	$numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
echo "Multiplicacion: " . ($numero1 * $numero2) . "<br>";