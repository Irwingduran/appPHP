<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>descripcion</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="images/Envision.css" type="text/css" /></head>
<body>
<div id="wrap">
  <div id="header">
    <h1 id="logo-text">centro perriatrico</h1>
    <h2 id="slogan">el mejor trato para tu mejor amigo! </h2>
  </div>
  <div  id="menu">
    <ul>
     <li><a href="index.php">Home</a></li>
      <li id="current"><a href="adopta.php">Adopta</a></li>
      <li><a href="contacto.php">Conocenos</a></li>
      <li class="last"><a href="acceder.php">Log in</a></li>
    </ul>
  </div>
  <div id="content-wrap">
    <div id="main">
      <h1>Descripcion de nuestros amigos listos para su nuevo hogar! </h1>

      <p>
	  <?php
    $id = $_GET['id'];

    $enlace = mysqli_connect("localhost", "root", "");
    mysqli_select_db($enlace, "adopcion");

    $resultado = mysqli_query($enlace, "select * from adoptar where id_animal = '$id'");
    $fila = mysqli_fetch_array($resultado);

    $titulo = $fila['raza'];
    $director = $fila['historial'];
    $actor = $fila['comportamiento'];
    $imagen = $fila['imagen'];


    echo "<img src = 'img/$imagen' width = '270' height = '270'><br>";
    echo "- Raza: $raza<br>";
    echo "- Historial Medico: $historial<br>";
    echo "- comportamiento: $comportamiento<br>";

?>
	  &nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp; </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p><br />
      </p>
      <br />
    </div>
  </div>
  <div id="footer">
    <p>CSS de ejemplo de https://www.free-css.com/free-css-templates/page7/envision-1.0</p>
  </div>
</div>
</body>
</html>
