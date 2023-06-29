<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>usuario version</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="images/Envision.css" type="text/css" /></head>
<body>
<div id="wrap">
  <div id="header">
    <h1 id="logo-text">centro perriatrico</h1>
    <h2 id="slogan">el mejor trato para tu mejor amigo peludo! </h2>
  </div>
  <div  id="menu">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li id="current"><a href="adopta.php">Adopta</a></li>
      <li><a href="contacto.php">Conocenos</a></li>
      <li class="last"><a href="salir.php">Salir</a></li>
    </ul>
  </div>
  <div id="content-wrap">
    <div id="main">
      <h1>Aquí está la lista de nuestros amiguitos disponibles.  </h1>
      <p>recuerda que se entrega vacunado, aseado y desparacitado. <br />
	      por protocolos internos, seguimos la integridad del animal y evitar 
		  que regrese a unas malas condiciones.
	  </p>
      <p>
	  
	  <?php
        $enlace = mysqli_connect("localhost", "root", "");
        mysqli_select_db($enlace, "adopcion");

        $resultado = mysqli_query($enlace, "select * from perritos");

        echo "<table border='1'>";
        echo "<tr><td> ID </td><td> RAZA </td><td> HISTORIAL </td><td> COMPORTAMIENTO </td><td> IMAGEN </td></tr>";

        while ($fila = mysqli_fetch_array($resultado))
        {
            $id = $fila['id_animal'];
            $raza = $fila['raza'];
            $historial = $fila['historial'];
            $comportamiento = $fila['comportamiento'];
            $imagen = $fila['imagen'];

            echo    "<tr><td> $id </td>
                        <td> $raza </td>
                        <td> $historial </td>
                        <td> $comportamiento </td>
                        <td> <img src='img/$imagen' height='80' width='70'> </td>
                    </tr>";
        }
        echo "</table>";
        mysqli_close($enlace);
    	?>
	  
	  &nbsp;</p>
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
