<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";
$pagina = "Categorias";

$error = "";


try {

    #borrar esto despues
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    //verificar si le da click al boton
    if (isset($_POST['boton-guardar'])) {

        //variables
        $name = $_POST["name"];
        //validaciones
        if (empty($name)) {
            throw new Exception("El nombre no puede estar vacio ");
        }
        //guardar

        $query = "INSERT INTO category (name) VALUE ('$name')";

        //actualizar
        $id = $_POST['id'] ?? '';

        if (!empty($id)) {
            $query = "UPDATE category SET name = '$name' WHERE category_id = '$id' ";
        }

        $resultado = $conexion->query($query) or die("Error en query");
        if ($resultado) {
            $_SESSION['mensaje'] = "Datos insertados correctamente";
        } else {
            throw new Exception("No se puede insertar los datos");
        }
        //refrezcar

        //refrezcar('category.php');
    }

    //buscar info para editar
    if (isset($_GET['editar'])) {
        $category_id = $_GET['editar'];
        $query = "SELECT * FROM category WHERE category_id = '$category_id' ";
        $resultado = mysqli_query($conexion, $query);

        if ($resultado) {
            while ($fila = mysqli_fetch_object($resultado)) {
                $category_id = $fila->category_id;
                $name = $fila->name;
                print_r($fila);
            }
        }
    }

        if (isset($_GET['eliminar'])) {
        $category_id = $_GET['eliminar'];
        
        $query = "DELETE FROM category WHERE category_id = '$category_id' ";

        $resultado = $conexion->query($query) or die( "Error en query");
        if ($resultado) {
            $script_alerta = alerta("Eliminado", "Datos eliminados", "success");
    } else {
            $script_alerta = alerta("Error", "No se pudo Eliminar", "error");

            throw new Exception("No se pudo eliminar los datos");
}
    }

} catch (Throwable $ex) {
    $error = $ex->getMessage();
}
require_once "vistas/vista-categorias.php";
#no debe haber codigo despues de esta linea
