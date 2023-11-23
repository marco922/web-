<?php
include("conexion.php");
if(isset($_POST['registrar'])){
    if(strlen($_POST['name'])>=1 && 
strlen($_POST['email']) >= 1 &&
strlen($_POST['password']) >= 1){
$name=trim($_POST['name']);
$email=trim($_POST['email']);
$password=trim($_POST['password']);
$consulta= "INSERT INTO usuraios(IDusuarios, Nombre, Correo, Contra, Cargo) 
VALUES ('$IDusuarios','$name','$email','$password','2')";
$resultado=mysqli_query($conex,$consulta);
if($resultado){
    ?>
    <div class=" ok text-center nunito media">
        Registro con exito
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