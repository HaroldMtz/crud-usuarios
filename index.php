<?php
include "conexion.php";
$resultado = $conn->query("SELECT * FROM usuarios");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Usuarios</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
  <h1 class="mb-4">Lista de Usuarios</h1>
  <a href="agregar.php" class="btn btn-success mb-3">Agregar Usuario</a>
  <table class="table table-bordered">
    <tr><th>ID</th><th>Nombre</th><th>Correo</th><th>Acciones</th></tr>
    <?php while($row = $resultado->fetch_assoc()): ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= $row['nombre'] ?></td>
      <td><?= $row['correo'] ?></td>
      <td>
        <a href="editar.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
        <a href="eliminar.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar?')">Eliminar</a>
      </td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>