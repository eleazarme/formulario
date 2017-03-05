<html>
<body>
<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$contraseña = $_POST['contraseña'];

$conexion = mysqli_connect("localhost", "root", "", "mesa");
$consulta = "INSERT INTO plato VALUES ('nombre', '$apellido', 'constraseña')";
$resultado = mysqli_query($conexion, $consulta);
echo "Gracias"
?>
</body>
</html>