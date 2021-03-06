<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agregar Noticia</title>
    <script type="text/javascript">
    	alert("<?=$_GET['Noticias'] ?>");
    </script>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/master.css">
  </head>
  <body>
    <header>
  		<div class="container-fluid">
        <img style="float:left; width:108px; height:61px;" src="./img/logo.png" alt="">
  			<h1 >Panel de Administracion</h1>
        <ul style="position:absulute; float:right; margin-right:50px; ">
          <li ><a href="#"><i class="glyphicon glyphicon-log-out "></i> Salir </a></li>
        </ul>
  		</div>
  	</header>
  <div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <span class="visible-xs navbar-brand">Menu</span>
          </div>
          <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">DietPlus+</a>
          </div>
          <ul class="nav navbar-nav navcolor">
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"></span>Agregar <span class="glyphicon glyphicon-plus"></span></a>
              <ul class="dropdown-menu">
                <li><a href="agregarDietas.php">Dietas</a></li>
                <li><a href="agregarEjercicios.php">Ejercicios</a></li>
                <li><a href="agregarNoticias.php">Noticias</a></li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Modificar <span class="glyphicon glyphicon-play"></span></a>
              <ul class="dropdown-menu">
                <li><a href="modificarDietas.php">Dietas</a></li>
                <li><a href="modificarEjercicios.php">Ejercicios</a></li>
                <li><a href="modificarNoticias.php">Noticias</a></li>
              </ul>
            </li>
            <li><a href="listadoUsuario.php">Lista de Usuarios</a></li>
          </ul>
        </div>
        </div>
      </nav>
    </div>
    <!-- Contenido del panel de administracion -->
    <section class="col-sm-8 contenido" >
      <center><h1>Agregar una nueva Noticia</h1></center>
      <form action="altaNoticias.php" method = "post" enctype="multipart/form-data">
        <fieldset>
          <div class="form-group">
              <label for="Titulo" class="control-label">Titulo:</label>
              <input type="text" class="form-control" name="titulo" placeholder="Titulo de la Noticia....">
          </div>
        </fieldset>
				<br>
        <fieldset>
          <div class="form-group">
              <label for="Subtitulo" class="control-label">Subtitulo:</label>
              <input type="text" class="form-control" name="subtitulo" placeholder="Subtitulo de la Noticia....">
          </div>
        </fieldset>
				<br>
        <fieldset>
          <div class="form-group">
              <label for="Descripcion" class="control-label">Descripcion:</label>
              <input type="text" class="form-control" name="descripcion" placeholder="Descripcion de la Noticia....">
          </div>
        </fieldset>
				<br>
				<fieldset>
          <div class="form-group">
              <label for="Fecha" class="control-label">Fecha:</label>
              <input type="date" class="form-control" name="fecha">
          </div>
        </fieldset>
				<br>
        <input type="submit" name="accion" value="Enviar" class="aceptar btn btn-info">
      </form>
			<br>
    </section>
  </div>
  </div>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
