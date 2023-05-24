<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pirerayen";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$empresa = $_POST['empresa'];
$servidores = $_POST['servidores'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$sector = $_POST['sector'];
$interno = $_POST['interno'];
$email = $_POST['email'];
$impresora = $_POST['impresora'];

$sql = "INSERT INTO usuarios (nombre, apellido, empresa, servidores, usuario, contraseña, sector, interno, email, impresora)
        VALUES ('$nombre', '$apellido', '$empresa', '$servidores', '$usuario', '$contraseña', '$sector', '$interno', '$email', '$impresora')";

if ($conn->query($sql) === TRUE) {
  echo "Usuario guardado exitosamente";
} else {
  echo "Error al guardar el usuario: " . $conn->error;
}

$conn->close();
?>
