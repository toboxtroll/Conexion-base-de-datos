<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
<<<<<<< HEAD
=======

>>>>>>> 06cb70aa31feb513133192c29bafe43f0ca76e67
    <!-- Dropdown Structure -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="Lectura1.html">1</a></li>
    <li><a href="Lectura2.html">2</a></li>
    <li class="divider"></li>
    <li><a href="#!">3</a></li>
    <li><a href="#!">4</a></li>
    <li><a href="#!">5</a></li>
  </ul>
  <ul id="dropdown2" class="dropdown-content">
    <li><a href="#!">1</a></li>
    <li><a href="#!">2</a></li>
  </ul>
  <ul id="dropdown3" class="dropdown-content">
    <li><a href="#!">1</a></li>
    <li><a href="#!">2</a></li>
    <li class="divider"></li>
    <li><a href="#!">3</a></li>
  </ul>
    <nav style="background-color: #005883;">
      <div class="nav-wrapper" style="margin-left: 20px; ">
        <a href="index.html" class="brand-logo" ><b>ECBTI</b></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="index.html">Inicio</a></li>
          <li><a class="dropdown-trigger" href="Lectura1" data-target="dropdown1">Lecturas<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Multimedia<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown3">Actividades<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a href="sass.html">Autor</a></li>
        </ul>
      </div>
    </nav>
        
  <div class="container">
    <div class="row">

      <div class="col s9">
      <!-- Grey navigation panel -->

        <div class="col s12">
          <h4 style="color:  #F47920;">Acceso a la base de datos desde PHP</h4>
          <p>
          Desde PHP se puede acceder fácilmente a una base de datos en MySQL empleando las más de 50 funciones que existen. Las principales funciones que se emplean para acceder a una base de datos son:</p>
          <p>mysql_connect(servidorBD, usuario, contraseña): abre una conexión con un servidor de bases de datos de MySQL, devuelve un identificador que se emplea en algunas de las siguientes funciones o FALSE en caso de error.</p>
          <p>mysql_select_db(nombreBD, identificador): selecciona una base de datos, devuelve TRUE en caso de éxito y FALSE en caso contrario.</p>
          <p>mysql_query(sentencia, identificador): ejecuta una sentencia SQL y devuelve un resultado (SELECT, SHOW, EXPLAIN o DESCRIBE, ...) o TRUE (INSERT, UPDATE, DELETE, ...) si todo es correcto, o FALSE en caso contrario.</p>
<<<<<<< HEAD
          <?php require_once 'config.php';?>
          <p>se selecciona</p>
  

=======

  
<?php
require_once 'dbconfig.php';
 
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
} 
?>
>>>>>>> 06cb70aa31feb513133192c29bafe43f0ca76e67
        </div>

      </div>


      <!--menu sidebar-->
      <div class="col s3">

        <h2><img src="img/logo_vertical.png"></h2>

      </div>

    </div>

  </div>

<!-- pie de pagina-->
<footer class="page-footer" style="background-color: #005883;">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <h5 class="white-text" style="color:  #F47920;">Universidad Nacional Abierta y a Distancia</h5>
        <p class="grey-text text-lighten-4">Escuela de Ciencias Básicas, Tecnología e Ingeniería</p>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">© 2014 Copyright Text
      <a class="grey-text text-lighten-4 right" href="https://www.unad.edu.co/">Visitenos</a>
    </div>
  </div>
</footer>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
<script type="text/javascript">

  $(document).ready(function(){
    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown();
  });
      
</script>
</body>
</html>