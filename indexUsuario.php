<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>welcome usuario</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="images/Envision.css" type="text/css" />
</head>
<body>
<?php session_start();
 if(!isset($_SESSION["k_username"])) header("Location:index.php");

?>
<div id="wrap">
  <div id="header">
    <h1 id="logo-text">centro perriatrico</h1>
    <h2 id="slogan">el mejor trato para tu mejor amigo peludo! </h2>
  </div>
  <div  id="menu">
    <ul>
     <li><a href="index.php">Home</a></li>
      <li id="current"><a href="adopta.php">Adopta</a></li>
      <li><a href="contacto.php">Conócenos</a></li>
      <li class="last"><a href="salir.php">Salir</a></li>
    </ul>
  </div>
  <div id="content-wrap">
    <div id="main">
      <h1>Bienvenido : <?php echo $_SESSION["k_username"]; ?> </h1>
      <p><strong>Bienvenido, un gusto tenerte de vuelta!</strong></p>
      <p><strong>Cambiale la vida a uno de nuestros animales que cuidamos en lo que encontramos un hogar para él </strong></p>
      <p>&iexcl;Gracias por no ser parte del problema con el mercado negro de animales.</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp; </p>
      <p>&nbsp;</p>
      <p><br />
    </p>
    </div>
  </div>
  <div id="footer">
    <p>CSS de ejemplo de https://www.free-css.com/free-css-templates/page7/envision-1.0</p>
  </div>
</div>
</body>
</html>
