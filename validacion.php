<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
include ("connect.php");	//Incluyo el archivo que hace la coneccion a la BD.

	$tingreso = $_POST["bot_reg"];	//Me fijo desde que formulario viene los datos.
	
	switch($tingreso) {	//Segun el form ejecuto la validación.
		case "Registrarse": 
			$boton = 'Reintentar';
			//Busco en la BD el nombre de usuario.
      		$consulta="SELECT * 
						FROM usuarios 
						WHERE usuario='".$_POST["n_user"]."';";
			/* Ejecuto la consulta de selección.*/
      		$hacerConsulta=mysql_query($consulta, $conexion);
			/* Determino el número de registros recuperados */
      		$cantidadDeRegistros=mysql_num_rows($hacerConsulta);
			if($cantidadDeRegistros > 0){	
				/*Si es mayor que 0 es por ya existe el usuario*/
				$msj = 'El nombre de usuario <b>'.$_POST["n_user"].'</b> ya existe, debe elegir otro';
				$destino = 'index.php?n_user=""';
			}elseif($_POST['n_pass'] != $_POST['n_rpass'] or $_POST['n_pass'] == ''){
				/*Si las contraseñas no coiciden vuelvo tambien*/
				$msj = 'Las contrase&ntilde;as no coinciden o son incorrectas, ingr&eacute;selas nuevamente por favor';
				$destino = 'index.php?n_user='.$_POST["n_user"];
			}else{
				/*Todo bien*/
				$boton = 'Aceptar';
				$msj = 'El nombre de usuario y contrase&ntilde;as fueron  verificadas correctamente, seleccione aceptar para continuar';
				$destino = 'registro.php';
			}	
			break;
		case "Loguearse": //Código a ejecutar;
			break;
		default: //Código a ejecutar por default.
	}
	//header('location:'.$destino);
?>
<form action="<?php echo $destino;?>" method="post">
  <table border="2" align="center">
    <tr>
      <td><div align="center"><?php echo $msj;?></div></td>
    </tr>
  </table>
  <table  border="0" align="center">
    <tr>
      <td><input type="submit" name="Submit" value="<?php echo $boton;?>" /></td>
    </tr>
  </table>
  <input name="n_user" type="hidden" id="n_user" value="<?php echo $_POST['n_user'];?>" />
<input name="n_pass" type="hidden" id="n_pass" value="<?php echo $_POST['n_pass'];?>" /></form>
</body>
</html>

