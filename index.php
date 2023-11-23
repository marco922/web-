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

    <div class="col pacifico grande" >
      Segundos
    </div>
     <div class="col media nunito espacio-arribam">
        <a href="index.html">Inicio sesion</a>
        <a href="cambioC.html">Cambio contraseña</a>
      </div>
      </div>
</div>
<div class="row espacio-arriba">
    <div class="col">
    </div>
<div class="row text-center"style="background-color: white;border-radius: 20px;height: 600px;">
  <form  method="post">
    <div class="text-center pacifico grande">Registro</div>
    <div class="col media espacio-arriba">
    <input type="text" name="name" placeholder="Nombre de usuario">
    </div>
    <div class="col media">
    <input type="email" name="email" placeholder="Correo electronico">
    </div>
    <div class="col media">
      <input type="password" name="password" placeholder="Contraseña">
    </div>
    <div class="col media espacio-arribam">
    <input type="submit" name="registrar">
    </div>
  </form>
  <?php
  include("registrar.php");
  ?>
</div>
    </body> 
</html>