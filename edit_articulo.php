<?php
include("conexion.php");
include("comentarios.php");
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['usuario'])) {
    // Redirigir a la página de inicio de sesión si no está autenticado
    header('Location: index.html');
    exit();
}

$articleId = isset($_POST['idarticulo']) ? $_POST['idarticulo'] : null;
// Obtener el rol del usuario desde la sesión o la base de datos
$rolUsuario = $_SESSION['rol'];  // Asume que el rol está almacenado en la sesión

// Verificar si el usuario tiene permisos para editar o eliminar
$puedeEditarEliminar = ($rolUsuario == 1 || $rolUsuario == 3);

if(isset($_POST['agregar'])){
    if($puedeEditarEliminar){
        $newtitulo=trim($_POST['titulo']);
        $newcontent=trim($_POST['contenido']);
        echo''.$newtitulo.''.$newcontent.''.$articleId.'';
        if ($articleId !== null && $newtitulo !== null && $newcontent !== null) {
            $result = editArticle($conex, $articleId, $newtitulo, $newcontent);
        }else{
            echo "Error: Datos del formulario incompletos.";
        }
    
        
    }
}

?>