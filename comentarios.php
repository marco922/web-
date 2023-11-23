<?php

// Función para obtener todos los artículos
include("conexion.php");
function getAllArticles($conex) {
    $articles = [];
    $query = "SELECT * FROM articulos";
    $result = mysqli_query($conex, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $articles[] = $row;
        }
    }

    return $articles;
}

// Función para obtener un artículo específico por ID
function getArticle($conex, $articleId) {
    $query = "SELECT * FROM articulos WHERE idarticulo = $articleId";
    $result = mysqli_query($conex, $query);

    if ($result) {
        return mysqli_fetch_assoc($result);
    } else {
        echo "Error en la consulta: " . mysqli_error($conex);
        return null;
    }
}

// Función para obtener los comentarios de un artículo
function getComments($conex, $articleId) {
    $comments = [];
    $query = "SELECT * FROM comentarios WHERE articulo_id = $articleId";
    $result = mysqli_query($conex, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $comments[] = $row;
        }
    }

    return $comments;
}

// Función para agregar un nuevo comentario
function addComment($conex, $articleId, $author, $content) {
    $author = mysqli_real_escape_string($conex, $author);
    $content = mysqli_real_escape_string($conex, $content);

    $query = "INSERT INTO comentarios (articulo_id, autor, contenido) VALUES ($articleId, '$author', '$content')";
    $result = mysqli_query($conex, $query);

    return $result ? "Comentario agregado con éxito" : "Error al agregar comentario: " . mysqli_error($conex);
}
function editArticle($conex, $articleId, $newtitulo, $newcontent) {
    

    // Obtener el rol del usuario desde la sesión o la base de datos
    $rolUsuario = $_SESSION['rol'];


    // Verificar si el usuario tiene permisos para editar
    $puedeEditar = ($rolUsuario == 1 || $rolUsuario == 3);

    if($puedeEditar){
        // Si el usuario tiene permisos para editar, realizar la edición
    $query = "UPDATE articulos SET Titulo='$newtitulo', Contenido='$newcontent' WHERE idarticulo=$articleId";
    
    // Ejecutar la consulta
    $result = mysqli_query($conex, $query);
    }

    if ($result) {
        return "Artículo editado con éxito";
    } else {
        return "Error al editar el artículo: " . mysqli_error($conex);
    }
}
function deleteArticle($conex, $articleId) {

    // Obtener el rol del usuario desde la sesión o la base de datos
    $rolUsuario = $_SESSION['rol'];

    // Verificar si el usuario tiene permisos para eliminar
    $puedeEliminar = ($rolUsuario == 1 || $rolUsuario == 3);

    // Si el usuario tiene permisos para eliminar, realizar la eliminación
    if ($puedeEliminar) {
        // Aquí deberías incluir tu lógica para eliminar el artículo de la base de datos
        $query = "DELETE FROM articulos WHERE idarticulo = $articleId";
        $result = mysqli_query($conex, $query);

        if ($result) {
            return "Artículo eliminado con éxito";
        } else {
            return "Error al eliminar el artículo: " . mysqli_error($conex);
        }
    } else {
        return "Error: No tienes permisos para eliminar este artículo";
    }
}
?>