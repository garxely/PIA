<!-- agregar_comentario.php -->
<?php
$usuario = $_POST['usuario'];
$comentario = $_POST['comentario'];

// Conexión a la base de datos
$mysqli = new mysqli("localhost", "usuario", "contraseña", "basededatos");

// Inserta el comentario en la base de datos
$mysqli->query("INSERT INTO comentarios (usuario, comentario) VALUES ('$usuario', '$comentario')");

// Cierra la conexión
$mysqli->close();

// Redirige de vuelta a la página del juego
header("Location: game.html");
?>
