<?php
include("conexion.php");
session_start();
$nombredeusuario=$_SESSION['usuario'];
if(isset($_POST['agregar'])){
    if(strlen($_POST['titulo'])>=1 && 
strlen($_POST['desc']) >= 1&& $_POST['opciones']>=1){
$titulo=trim($_POST['titulo']);
$descripcion=trim($_POST['desc']);
$seccion=trim($_POST['opciones']);
$consul= "INSERT INTO articulos(IDarticulo, Seccion , Autor, Titulo, Contenido, Fecha) 
VALUES ('$IDarticulo','$seccion','$nombredeusuario','$titulo','$descripcion', CURDATE())";
$resul=mysqli_query($conex,$consul);
if($resul){
    ?>
    <div class=" ok text-center nunito media">
        Se agrego el articulo con exito
    </div>
    <?php
}else{
    ?>
    <div class=" bad text-center nunito media">
        Ocurrio un error
    </div>
    <?php
}
}else{
    ?>
    <div class=" bad text-center nunito media">
        Completa por favor los campos
    </div>
    <?php
}
}
?>