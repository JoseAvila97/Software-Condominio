<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Login</title>
</head>
<body class="bg-image">
  <div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      
      <div class="input-group">
        <i class="fa fa-user-o icons" aria-hidden="false"></i>
        <input type="text" name="nombre" placeholder="Nombre" class="form-control">
      </div>

  <div class="input-group">
        <i class="fa fa-user-o icons" aria-hidden="false"></i>
        <input type="text" name="apellido" placeholder="Apellido" class="form-control">
      </div>      

      <div class="input-group">
        <select class="form-control" name="apartamento">
          <option value="">Selecciona Apartamento</option>
          <option value="1-1">1-1</option>
          <option value="1-2">1-2</option>
          <option value="1-3">1-3</option>
          <option value="1-4">1-4</option>
          <option value="2-1">2-1</option>
          <option value="2-2">2-2</option>
          <option value="2-3">2-3</option>
          <option value="2-4">2-4</option>
          <option value="3-1">3-1</option>
          <option value="3-2">3-2</option>
          <option value="3-3">3-3</option>
          <option value="3-4">3-4</option>
          <option value="4-1">4-1</option>
          <option value="4-2">4-2</option>
          <option value="4-3">4-3</option>
          <option value="4-4">4-4</option>
          <option value="5-1">5-1</option>
          <option value="5-2">5-2</option>
          <option value="5-3">5-3</option>
          <option value="5-4">5-4</option>
          <option value="6-1">6-1</option>
          <option value="6-2">6-2</option>
          <option value="6-3">6-3</option>
          <option value="6-4">6-4</option>
          <option value="7-1">7-1</option>
          <option value="7-2">7-2</option>
          <option value="7-3">7-3</option>
          <option value="7-4">7-4</option>
          <option value="8-1">8-1</option>
          <option value="8-2">8-2</option>
          <option value="8-3">8-3</option>
          <option value="8-4">8-4</option>
          <option value="9-1">9-1</option>
          <option value="9-2">9-2</option>
          <option value="9-3">9-3</option>
          <option value="9-4">9-4</option>
          <option value="10-1">10-1</option>
          <option value="10-2">10-2</option>
          <option value="10-3">10-3</option>
          <option value="10-4">10-4</option>
          <option value="11-1">11-1</option>
          <option value="11-2">11-2</option>
          <option value="11-3">11-3</option>
          <option value="11-4">11-4</option>
          <option value="12-1">12-1</option>
          <option value="12-2">12-2</option>
          <option value="12-3">12-3</option>
          <option value="12-4">12-4</option>
          <option value="oficina-1">Oficina1</option>
          <option value="oficina2">Oficina2</option>
        </select>
      </div>

      <div class="input-group">
        <i class="fa fa-user-o icons" aria-hidden="false"></i>
        <input type="text" name="usuario" placeholder="Usuario" class="form-control">
      </div>

      <div class="input-group">
        <i class="fa fa-lock icons" aria-hidden="false"></i>
        <input type="password" name="password" placeholder="Contraseña" class="form-control">
      </div>

      <div class="input-group">
        <select class="form-control" name="rol">
          <option value="">Selecciona un privilegio</option>
          <option value="administrador">Administrador</option>
          <option value="usuario">Usuario</option>
        </select>
      </div>

      <?php if (!empty($errores)): ?>
        <ul>
          <?php echo $errores; ?>
        </ul>
      <?php endif; ?>

      <button type="submit" name="submit" class="btn btn-flat-green">Registrar</button>
    </form>

    <a href="<?php echo RUTA.'login.php' ?>" class="login-link">¿Ya tienes cuenta?</a>
  </div>
</body>
</html>
