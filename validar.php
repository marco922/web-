<?php
session_start();
include("conexion.php");
$name=$_POST['name'];
$_SESSION['usuario']=$name;
$password=$_POST['password'];
$consulta="SELECT* FROM usuraios where Nombre= '$name' and Contra ='$password' ";
$resultado=mysqli_query ($conex,$consulta);

$filas=mysqli_fetch_array($resultado);
$_SESSION['rol']=$filas['Cargo'];
if($filas['Cargo']==1){//pagina para administrador 
    header("location:homeA.php");
}else
if($filas['Cargo']== 2){//pagina para lectores
    header("location:home.php");
}else
if($filas['Cargo']== 3){

    header("location:homeE.php");
}
else
{
    include("index.html");
    ?>
    <div class=" bad text-center nunito media">
        Error de autentificación
    </div>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conex);


?>