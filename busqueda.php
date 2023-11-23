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
if (isset($_POST["agregarA"])) {
    // Obtener el nombre de usuario seleccionado
    $nombreUsuarioSeleccionado = isset($_POST['usuariosConCargo3']) ? trim($_POST['usuariosConCargo3']) : '';    // Realizar una consulta para obtener los artículos asociados al nombre de usuario
    $queryArticulos = "SELECT * FROM articulos WHERE Autor = ?";
    
    // Preparar la sentencia
    $stmt = mysqli_prepare($conex, $queryArticulos);

    // Vincular parámetros
    mysqli_stmt_bind_param($stmt, "s", $nombreUsuarioSeleccionado);
    
    // Ejecutar la consulta
    mysqli_stmt_execute($stmt);

    // Obtener resultados
    $resultArticulos = mysqli_stmt_get_result($stmt);

    // Verificar si la consulta fue exitosa
    if ($resultArticulos) {
        while ($rowArticulo = mysqli_fetch_assoc($resultArticulos)) {
            // Procesar y mostrar los resultados de los artículos
            $titulo = $rowArticulo['Titulo'];
            $contenido = $rowArticulo['Contenido'];
            $fecha = $rowArticulo['Fecha'];

            // Mostrar los resultados
            echo "<div class='col-9 pacifico grande'>$titulo</div>";
            echo "<div class='col nunito media'>$nombreUsuarioSeleccionado</div>";
            echo "<div class='nunito'>$fecha</div>";
            echo "<div class='nunito'>$contenido</div>";
        }
    } else {
        echo "Error en la consulta de artículos: " . mysqli_error($conex);
    }

    // Cerrar la sentencia preparada
    mysqli_stmt_close($stmt);
}
if (isset($_POST["agregarS"])) {
    // Obtener el nombre de usuario seleccionado
    $seccion = isset($_POST['opciones']) ? trim($_POST['opciones']) : '';    // Realizar una consulta para obtener los artículos asociados al nombre de usuario
    $queryArticulos = "SELECT * FROM articulos WHERE Seccion = ?";
    
    // Preparar la sentencia
    $stmt = mysqli_prepare($conex, $queryArticulos);

    // Vincular parámetros
    mysqli_stmt_bind_param($stmt, "s", $seccion);
    
    // Ejecutar la consulta
    mysqli_stmt_execute($stmt);

    // Obtener resultados
    $resultArticulos = mysqli_stmt_get_result($stmt);

    // Verificar si la consulta fue exitosa
    if ($resultArticulos) {
        while ($rowArticulo = mysqli_fetch_assoc($resultArticulos)) {
            // Procesar y mostrar los resultados de los artículos
            $titulo = $rowArticulo['Titulo'];
            $contenido = $rowArticulo['Contenido'];
            $fecha = $rowArticulo['Fecha'];
            $nombreUsuarioSeleccionado= $rowArticulo['Autor'];

            // Mostrar los resultados
            echo "<div class='col-9 pacifico grande'>$titulo</div>";
            echo "<div class='col nunito media'>$nombreUsuarioSeleccionado</div>";
            echo "<div class='nunito'>$fecha</div>";
            echo "<div class='nunito'>$contenido</div>";
        }
    } else {
        echo "Error en la consulta de artículos: " . mysqli_error($conex);
    }

    // Cerrar la sentencia preparada
    mysqli_stmt_close($stmt);
}
if (isset($_POST["agregarF"])) {
    // Obtener el nombre de usuario seleccionado
    $fecha = isset($_POST['Fecha']) ? trim($_POST['Fecha']) : '';    // Realizar una consulta para obtener los artículos asociados al nombre de usuario
    $queryArticulos = "SELECT * FROM articulos WHERE Fecha = ?";
    
    // Preparar la sentencia
    $stmt = mysqli_prepare($conex, $queryArticulos);

    // Vincular parámetros
    mysqli_stmt_bind_param($stmt, "s", $fecha);
    
    // Ejecutar la consulta
    mysqli_stmt_execute($stmt);

    // Obtener resultados
    $resultArticulos = mysqli_stmt_get_result($stmt);

    // Verificar si la consulta fue exitosa
    if ($resultArticulos) {
        while ($rowArticulo = mysqli_fetch_assoc($resultArticulos)) {
            // Procesar y mostrar los resultados de los artículos
            $titulo = $rowArticulo['Titulo'];
            $contenido = $rowArticulo['Contenido'];
            $nombreUsuarioSeleccionado= $rowArticulo['Autor'];

            // Mostrar los resultados
            echo "<div class='col-9 pacifico grande'>$titulo</div>";
            echo "<div class='col nunito media'>$nombreUsuarioSeleccionado</div>";
            echo "<div class='nunito'>$fecha</div>";
            echo "<div class='nunito'>$contenido</div>";
        }
    } else {
        echo "Error en la consulta de artículos: " . mysqli_error($conex);
    }

    // Cerrar la sentencia preparada
    mysqli_stmt_close($stmt);
}
?>
</div>
    </body> 
</html>
