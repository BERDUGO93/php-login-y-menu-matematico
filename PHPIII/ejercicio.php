<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
    <center>
    <h1>----Menu operaciones matematicas en php -----<h1>
	<form method="POST">
		
		
		<label>Operación:</label><br>
		
            <label value="1">1.Datos de usuario</label><br>
			<label value="2">2.Suma</label><br>
			<label value="3">3.Resta</label><br>
			<label value="4">4.Multiplicación</label><br>
			<label value="5">5.División</label><br>
		
            <label>Seleccion</label>
		<input type="number" name="operacion"><input type="submit" name="submit" value="seleccion"><br>
		

       
	</form>

	<?php
		if(isset($_POST['submit'])) {
			
			$numero1 = $_POST['numero1'];
			$numero2 = $_POST['numero2'];
			$operacion = $_POST['operacion'];

			
			switch($operacion) {
                case '1':
                    header("Location: formulario.php");

					
					break;
				case '2':
                    header("Location: suma.php");
					
					break;
				case '3':
                    header("Location: resta.php");
					break;
				case '4':
                    header("Location: multiplicacion.php");
					break;
				case '5':
                    header("Location: division.php");
					break;
				default:
					echo "Operación no válida<br>";
			}
		}
	?>
</body>
</html>
