<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>inicio Sesion</title>
</head>
<body>
    
<div class="alert alert-dark" role="alert">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <form method="post" action="login.php">
        <div class="mb-3">
          <label for="email">Correo electrónico:</label>
          <input type="email" class="form-control" placeholder="correo" id="email" name="email" required>
        </div>
        <br>
        <div class="mb-3">
          <label for="password">Contraseña:</label>
          <input type="password" class="form-control" placeholder="contraseña" id="password" name="password"  required>
        
        </div>
        <div class="col">
          <button class="btn btn-primary" type="button" onclick="mostrarContrasena()" >Mostrar Contraseña</button>
        </div>
        <br>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Recordarme</label>
        </div>
        <input type="submit" class="btn btn-dark" value="Iniciar sesión" >

      
      </form>
    </div>
  </div>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    
</script>
<script>
  function mostrarContrasena(){
      var tipo = document.getElementById("password");
      if(tipo.type == "password"){
          tipo.type = "text";
      }else{
          tipo.type = "password";
      }
  }
</script>

</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usuarios";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "SELECT * FROM usuario WHERE correo='$email' AND password ='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    session_start();
    $_SESSION['correo'] = $email;
    header("Location: ejercicio.php");
    exit();
} else {
    echo "Correo electrónico o contraseña inválidos.";
    }


?>