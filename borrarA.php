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
    <div style="background-color: black; height: 2px;">
        
    </div>
    <div class=" media nunito text-center">
        <a href="Sopinion.html">Opinión </a>
        <a href="Spolitica.html">Política </a>
        <a href="Sopinion.html">Economía </a>
        <a href="Spolitica.html">Deportes </a>
        <a href="Sopinion.html">Cultura </a>
        <a href="Spolitica.html">Ciencia </a>
        <a href="Sopinion.html">Tecnología </a>
        <a href="Spolitica.html">Salud </a>
        <a href="Spolitica.html">Farándula </a>
      </div>
    <div style="background-color: black; height: 2px;">
        
    </div>
    
</div>
      </div>
<div class="row espacio-arriba">
    <div class="col">
    </div>
    </div>
<div class="row "style="background-color: white;border-radius: 20px;height: 600px;">


<?php
include 'conexion.php';
include 'comentarios.php';

// Obtener el valor del ID del artículo de la URL
$articleId = isset($_GET['id']) ? $_GET['id'] : null;
// Verificar si el ID del artículo está presente
if ($articleId !== null) {
    echo"<div class='pacifico grande text-center'>Desea borrar el articulo</div>";
    echo"<form action='delete_articulo.php'method='post'>";
    echo "<input type='hidden' name='idarticulo' value='$articleId'>";
    echo "<input type='submit' name='agregar'>";
    echo"</div>";
    echo "</form>";
    
}else {
    // Manejar el caso en que no se proporcionó un ID de artículo válido
    echo "ID de artículo no válido.";
}
?>
</form>
</div>
    </body> 
</html>