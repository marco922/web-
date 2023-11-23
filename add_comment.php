<?php
include 'conexion.php';
include 'comentarios.php';

// Recibir datos del formulario
$articleId = isset($_POST['idarticulo']) ? $_POST['idarticulo'] : null;
$content = isset($_POST['contenido']) ? $_POST['contenido'] : null;
session_start();
$author = $_SESSION['usuario'];
// Verificar si la variable de sesión 'usuario' está definida
if (!isset($_SESSION['usuario'])) {
    echo "Error: Sesión de usuario no definida.";
    // Puedes redirigir al usuario a una página de inicio de sesión u otra página según tus necesidades
    exit();
}
// Verificar si todos los datos necesarios están presentes
if ($articleId !== null && $author !== null && $content !== null) {
    // Llamar a la función addComment
    $result = addComment($conex, $articleId, $author, $content);

    // Mostrar el resultado (puedes redirigir al usuario a otra página si lo deseas)
    echo $result;
} else {
    // Manejar el caso en el que los datos del formulario no están completos
    echo "Error: Datos del formulario incompletos.";
}
?>