<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <title>Bienvenido Administrador</title>
</head>
<body>
	<?php
	require 'admin/function.admin.php'
	 ?>
	<header>
  <a href="<?php echo RUTA.'close.php' ?>">Cerrar Sesion</a>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  	<a class="navbar-brand" href="#"><h6>Bienvenido <?php echo $user['usuario']; ?></h6></a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>
  	<div class="collapse navbar-collapse" id="navbarNav">
    	<ul class="navbar-nav">
      		<li class="nav-item active">
        		<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
     		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="#">Features</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="<?php echo RUTA.'close.php' ?>">Cerrar Sesion</a>
      		</li>
    	</ul>
    </div>
</nav>
  	</header>
    <form method="POST" action="">
  	   <h1>Factura</h1>
  	    <br> <hr>
  	     <h3>Concepto</h3>
  		     <input class="form-control" type="text" name="titulo" placeholder="Titulo">
  	    <br> <hr>

  	     <h3>Descripcion del Pago</h3>
  		<input class="form-control" type="text" name="descripcion" placeholder="Descripcion">
  	   <br> <hr>

  	    <h3>Costo</h3>
  	     <input class="form-control" type="number" name="costo" placeholder="Costo">
  	      <br> <hr>

  	       <h3>Reportar Pago en Divisas</h3>


  			<input class="form-control" type="number" name="divisas" placeholder="Divisas">
  			<input class="form-control" type="number" name="bolivares" placeholder="Costo en Bs.S">
  			<button type="submit" value="multiplicar" name="calcular" class="btn btn-primary">Calcular</button>
  			<input type="text" name="resultado" readonly value="<?php echo number_format($calcular,2,".",",")?>">

  	<br> <hr>

	   <h3>Numero de Factura o Referencia</h3>
  	<input class="form-control" type="number" name="factura" placeholder="Factura o Referencia">
  	<br> <hr>

  	<h3>Fecha de Pago</h3>
  	<input type="date" name="fecha">
  	<br> <hr>

  	<h3>Subir Imagenes</h3>
  	<div class="custom-file">
  		<input type="file" name="imagen" class="custom-file-input" id="customFile">
  		<label class="custom-file-label" name="imagen" for="customFile">Choose file</label>
	</div>
	<br> <hr>
  <button class="btn btn-primary" type="submit" name="generar">Generar Factura</button>
  </form>


</body>
</html>
