<?php session_start();

require 'admin/config.php';
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = limpiarDatos($_POST['nombre']);
    $apellido = limpiarDatos($_POST['apellido']);
    $apartamento = $_POST['apartamento'];
    $usuario = limpiarDatos($_POST['usuario']);
    $password = limpiarDatos($_POST['password']);
    $password = hash('sha512', $password);
    $rol = $_POST['rol'];

    $errores = '';

    // validar los campos de texto
    if (empty($nombre) || empty($apellido) || empty($apartamento) || empty($usuario) || empty($password) || empty($rol)) {
        $errores .= '<li class="error">Por favor rellene todos los campos</li>';
    }else{
        // validacion de que el usuario no exista
        $conexion = conexion($bd_config);
        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
        $statement->execute(array(
            ':usuario' => $usuario
        ));
        $resultado = $statement->fetch();

        if ($resultado != false) {
            $errores .= '<li class="error">Este usuario ya existe</li>';
        }
    }

    if($errores == ''){
        $conexion = conexion($bd_config);
        $statement = $conexion->prepare('INSERT INTO usuarios (id, nombre, apellido, apartamento, usuario, password, tipo_usuario) VALUES(null, :nombre, :apellido, :apartamento, :usuario, :password, :tipo_usuario)');
        $statement->execute(
            array(
                ':nombre' => $nombre,
                ':apellido' => $apellido,
                ':apartamento' => $apartamento,
                ':usuario' => $usuario,
                ':password' => $password,
                ':tipo_usuario' => $rol
            )
          );

        header('Location: '.RUTA.'login.php');

    }
}

require 'views/registro.view.php';

?>
