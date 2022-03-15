<?php
require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

$pagina = "staff";

try {
    # borrar esto despues
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    //verificar si le da click al botton
    if (isset($_POST['boton-guardar'])) {
        echo "guardando...";
        //variables
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $address_id = $_POST["address_id"];
        $email = $_POST["email"];
        $store_id = $_POST["address_id"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        



        // validaciones
        if (empty($first_name)) {

            throw new Exception("el Nombre no puede estar vacio");
        }
        if (empty($last_name)) {
            throw new Exception("El Apellido no puede estar vacio");
        }
        if (empty($address_id)) {

            throw new Exception(" la direccion  no puede estar vacio");
        }

        if (empty($email)) {

            throw new Exception(" El correo no puede estar vacio");
        }

        if (empty($store_id)) {

            throw new Exception("La tienda no puede estar vacio");
        }


        if (empty($username)) {

            throw new Exception(" El usuario no puede estar vacio");
        }

        if (empty($password)) {

            throw new Exception(" la contraseña no puede estar vacio");
        }
         //guardar
        $query = "INSERT INTO staff ( first_name, last_name, address_id, email, store_id, username, password) VALUES ( '$first_name', '$last_name', '$address_id', '$email', '$store_id', '$username', '$password')";

        $resultado = $conexion->query($query) or die("Error en query");

        if ($resultado) {
            $_SESSION['mensaje'] = "Datos insertados correctamente";

            $script_alerta = alerta("Insertado", "Datos correcto", "success");
        } else {
            $script_alerta = alerta("Error", "No pudo insertar", "error");

            throw new Exception("No se pudo insertar los datos");
        }
    }
} catch (Throwable $ex) {
    $error = $ex->getMessage();
}


# incluir la vista 
require_once "vistas/vista-staff.php";

# debe haber codigo despues de esta linea