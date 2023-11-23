<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
   rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200&family=Pacifico&display=swap" rel="stylesheet">
  <title>Segundos</title>
</head>
<body>
    <div class="container">
  <div class="row"style="background-color: white; border-radius: 20px;">

    <div class="col pacifico grande text-center" >
      Segundos
    </div>
      </div>
      <div style="background-color: black; height: 5px;">

      </div>
</div>
<div class="row espacio-arriba">
    <div class="col">
    </div>
<div class="row"style="background-color: white;border-radius: 20px;">
<?php
include 'conexion.php';
include 'comentarios.php';

// Obtener el valor del ID del artículo de la URL
$articleId = isset($_GET['id']) ? $_GET['id'] : null;

// Verificar si el ID del artículo está presente
if ($articleId !== null) {
    // Obtener el artículo específico
    $article = getArticle($conex, $articleId);

    // Obtener los comentarios para el artículo específico
    $comments = getComments($conex, $articleId);

    // Mostrar el artículo
    echo "<h1 class='pacifico grande'>" . $article['Titulo'] . "</h1>";
    echo "<h1 class='nunito ' >" . $article['Autor'] . "</h1>";
    echo "<p  class='nunito' >" . $article['Contenido'] . "</p>";

    // Mostrar los comentarios
    echo "<h2>Comentarios</h2>";
    echo "<ul>";
    foreach ($comments as $comment) {
        echo "<div><strong>Autor:</strong> " . $comment['autor'] . "<br>";
        echo "<strong>Comentario:</strong> " . $comment['contenido'] . "</div>";
    }
    echo "</ul>";

    // Formulario para agregar un nuevo comentario
    echo "<h2>Añadir Comentario</h2>";
    echo "<form action='add_comment.php' method='post'>";
    echo "<input type='hidden' name='idarticulo' value='$articleId'>";
    echo "<label for='contenido'>Comentario:</label>";
    echo "<textarea name='contenido' required></textarea><br>";
    echo "<input type='submit' value='Agregar Comentario'>";
    echo "</form>";

} else {
    // Manejar el caso en que no se proporcionó un ID de artículo válido
    echo "ID de artículo no válido.";
}
?>
</div>
    </body> 
</html>