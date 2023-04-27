<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form method="post">
    <h1>----Ingrese sus datos personales--- </h1>

    <label>Nombre :</label><br>
		<input type="text" name="nombre"><br>

     <label>apellido :</label><br>
	<input type="text" name="apellido"><br>
    <label>telefono :</label><br>
		<input type="text" name="telefono"><br>
    <label>correo :</label><br>
	<input type="mail" name="correo"><br>    
    <label>Direccion :</label><br>
    <input type="text" name="direccion"><br>
    <input type="submit" name="registrar"><br>

</form>
</body>
</html>

<?php

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];

echo"<h1>----Datos ingresados ----</h1>
<table border=1>
<tr>
<td>Nombre</td>
<td>Apellido</td>
<td>Telefono</td>
<td>Correo</td>
<td>Direccion</td>
</tr>
<tr>
<td>".$nombre."</td>
<td>".$apellido."</td>
<td>".$telefono."</td>
<td>".$correo."</td>
<td>".$direccion."</td>
</tr>
</table>";