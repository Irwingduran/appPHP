<?php session_start();  
$usuario=$_REQUEST['nombre']; 
$password=$_REQUEST['pass'];
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "adopcion");
$resultado = mysqli_query($link,"select password,usuario,tipo 
from usuarios where usuario='$usuario'");
if($row = mysqli_fetch_array($resultado))
{
   if($row["password"] == $password)
   {
     $_SESSION["k_username"] = $row['usuario']; 
     $ti=$row['tipo'];
     if ($ti==0)  header("Location:indexADM.php");
     else header("Location: indexUsuario.php");
   }
   else header("Location: errorPassword.php");
}	
 else header("Location: errorLogin.php");
?> 