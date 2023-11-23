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
include("conexion.php");
echo"<div class='pacifico media espacio-izquierda'>Buscar por autor</div>";
// Realizar la consulta para obtener los nombres de usuarios con cargo 3
$queryA = "SELECT Nombre FROM usuraios WHERE Cargo = 3";
$resultA = mysqli_query($conex, $queryA);

// Verificar si la consulta fue exitosa
if ($resultA) {
    ?>
    <form action="busqueda.php" method="post">
    <select name="usuariosConCargo3" id="usuariosConCargo3">
        <?php
        // Iterar sobre los resultados y construir las opciones del select
        while ($row = mysqli_fetch_assoc($resultA)) {
            $nombreUsuario = $row['Nombre'];
            echo "<option value='$nombreUsuario'>$nombreUsuario</option>";
        }
        ?>
    </select>
    <div class="col espacio-arribam">
            <input type="submit" name="agregarA">
            </div>
            </form>
    <?php
} else {
    echo "Error en la consulta: " . mysqli_error($conex);
}
echo"<div class='pacifico media espacio-izquierda'>Buscar por Sección</div>";
?>
<form action="busqueda.php" method="post">
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
            <div class="col espacio-arribam">
            <input type="submit" name="agregarS">
            </div>
            </form>
<?php
echo"<div class='pacifico media espacio-izquierda'>Buscar por Tiraje</div>";
$queryF = "SELECT Fecha FROM articulos";
$resultF = mysqli_query($conex, $queryF);
if ($resultF) {
    ?>
    <form action="busqueda.php" method="post">
    <select name="Fecha" id="Fecha">
        <?php
        // Iterar sobre los resultados y construir las opciones del select
        while ($row = mysqli_fetch_assoc($resultF)) {
            $fecha = $row['Fecha'];
            echo "<option value='$fecha'>$fecha</option>";
        }
        ?>
    </select>
    <div class="col espacio-arribam">
            <input type="submit" name="agregarF">
            </div>
            </form>
    <?php
}else {
    echo "Error en la consulta: " . mysqli_error($conex);
}
?>
</div>
    </body> 
</html>