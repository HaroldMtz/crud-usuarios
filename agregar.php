<?php include "conexion.php";
if ($_POST) {
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $conn->query("INSERT INTO usuarios (nombre, correo) VALUES ('$nombre', '$correo')");
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head><title>Agregar</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head><body class="container mt-4">
<h2>Agregar Usuario</h2>
<form method="post">
  <input class="form-control mb-2" name="nombre" placeholder="Nombre" required>
  <input class="form-control mb-2" name="correo" placeholder="Correo" required>
  <button class="btn btn-success">Guardar</button>
</form>
</body></html>