<?php include "conexion.php";
$id = $_GET['id'];
$usuario = $conn->query("SELECT * FROM usuarios WHERE id=$id")->fetch_assoc();
if ($_POST) {
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $conn->query("UPDATE usuarios SET nombre='$nombre', correo='$correo' WHERE id=$id");
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head><title>Editar</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head><body class="container mt-4">
<h2>Editar Usuario</h2>
<form method="post">
  <input class="form-control mb-2" name="nombre" value="<?= $usuario['nombre'] ?>" required>
  <input class="form-control mb-2" name="correo" value="<?= $usuario['correo'] ?>" required>
  <button class="btn btn-primary">Actualizar</button>
</form>
</body></html>