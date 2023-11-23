<?php
include("conexion.php");
include("comentarios.php");
session_start();
$nombredeusuario=$_SESSION['usuario'];
$rolUsuario=$_SESSION['rol'];
$consulta="SELECT* FROM articulos ";
$id_articulo="SELECT* FROM articulos where idarticulo";
$resultado=mysqli_query ($conex,$consulta);
$articles = getAllArticles($conex);
$puedeRealizarAccion = ($rolUsuario == 1 || $rolUsuario == 3);
if(mysqli_num_rows($resultado)> 0){
  if($puedeRealizarAccion){

    echo"<meta charset='utf-8'>";
      foreach ($articles as $article) {
        echo "<div ><a class='pacifico media espacio-izquierda' href='articulos.php?id=" . $article['idarticulo'] . "'>" . $article['Titulo'] . "</a>
        
        </>";
        echo "<a class='nunito media espacio-izquierda' href='editar.php?id=" . $article['idarticulo'] . "'>Editar</a>";
        echo "<a class='nunito media espacio-izquierda' href='borrarA.php?id=" . $article['idarticulo'] . "'>Eliminar</a>";
      }
  }else{
    echo"<meta charset='utf-8'>";
    foreach ($articles as $article) {
      echo "<div ><a class='pacifico media espacio-izquierda' href='articulos.php?id=" . $article['idarticulo'] . "'>" . $article['Titulo'] . "</a></>";
    }}
      

        

}else {
  echo "Error al obtener el artículo: " . mysqli_error($conex);
}
?>