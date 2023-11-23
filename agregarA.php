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

    <div class="col-9 pacifico grande text-center" >
      Segundos (Autor)
    </div>
    <div class="col pacifico media text-center" >
      <a href="homeE.php">Volver</a>
    </div>
    <div style="background-color: black; height: 2px;">
        
    </div>
</div>
<div class="row espacio-arriba">
    <div class="col">
    </div>
<div class="row text-center"style="background-color: white;border-radius: 20px;height: 600px;">
<form method="post">
            <div class="text-center pacifico grande">Agregar articulo</div>
            <div class="col media espacio-arriba">
            <label for="opciones" >Secciones:</label>
            <select name="opciones" id="opciones">
              <option value="1">Política</option>
              <option value="2">Economía</option>
              <option value="3">Deportes</option>
              <option value="4">Cultura</option>
              <option value="5">Ciencia</option>
              <option value="6">Tecnología</option>
              <option value="7">Farándula</option>
              <option value="8">Salud</option>
            </select>
            </div>
            <div class="col media">
            <input type="titulo" name="titulo" placeholder="Titulo">
            </div>
            <div class="col media">
              <input type="desc" name="desc" placeholder="Descripción">
            </div>
            <div class="col media espacio-arribam">
            <input type="submit" name="agregar">
            </div>
          </form>
          <?php
  include("ver_articulos.php");
  ?>
</div>
    </body> 
</html>