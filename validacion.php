<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Validaci&oacute;n de Datos</title>
</head>

<body>
<?php
include ("connect.php");	//Incluyo el archivo que hace la coneccion a la BD.
	
	$abrirFilaYCelda = '<tr><td><div align="center">';
	$cerrarCeldaYFila = '</div></td></tr>';
	$filas = '';
	
	//Me fijo desde que formulario viene los datos.
		$tingreso = $_POST["bot_reg"];	
	
	//Segun el form ejecuto su validación.
	switch($tingreso) {	
		case "Registrarse": 
			$msj ='';
			$boton = 'Reintentar';
			$destino = 'index.php';
			//Armo la consulta SQL para buscar el nombre de usuario en la BD.
				$consulta="SELECT * 
							FROM usuarios 
							WHERE usuario='".$_POST["n_user"]."';";
			/* Ejecuto la consulta de selección.*/
				$hacerConsulta=mysql_query($consulta, $conexion);
			/* Determino el número de registros recuperados */
				$cantidadDeRegistros=mysql_num_rows($hacerConsulta);
			if($cantidadDeRegistros > 0){	
				/*Si es mayor que 0 es por ya existe el usuario*/
				$msj = 'El nombre de usuario <b>'.$_POST["n_user"].'</b> 
						ya existe, debe elegir otro';
				$filas.= $abrirFilaYCelda.$msj.$cerrarCeldaYFila;}
			if($_POST['n_user'] == ''){
				/*El usuario está en blanco*/
				$msj = 'El nombre de usuario no puede estar en blanco';
				$filas.= $abrirFilaYCelda.$msj.$cerrarCeldaYFila;}
			if($_POST['n_pass'] == ''){
				/*La contraseña está en blanco*/
				$msj = 'La contrase&ntilde;a no puede estar en blanco';
				$filas.= $abrirFilaYCelda.$msj.$cerrarCeldaYFila;}
			if($_POST['n_pass'] != $_POST['n_rpass']){
				/*Las contraseñas no coiciden*/
				$msj = 'Las contrase&ntilde;as no coinciden, 
						ingr&eacute;selas nuevamente por favor';
				$filas.= $abrirFilaYCelda.$msj.$cerrarCeldaYFila;}
			if($msj == ''){
				/*Todo bien*/
				$msj = 'El nombre de usuario y contrase&ntilde;as 
						fueron verificadas correctamente, 
						seleccione aceptar para continuar';
				$boton = 'Aceptar';
				$destino = 'registro.php';
				$filas.= $abrirFilaYCelda.$msj.$cerrarCeldaYFila;}
			break;
		case "Loguearse": //Código a ejecutar;
			$msj ='';
			$boton = 'Reintentar';
			$destino = 'index.php';
			if($_POST["user"] != '' and $_POST["pass"] != '' ){
				/*Si las variables estan cargadas recien ejecuto
				la busqueda para que no de error*/
				
				/*Armo la consulta SQL para 
				buscar el nombre de usuario en la BD.*/
					$consulta= "SELECT * 
								FROM usuarios 
								WHERE usuario='".$_POST["user"]."' 
									and pass='".$_POST["pass"]."';";
				/* Ejecuto la consulta de selección.*/
					$hacerConsulta=mysql_query($consulta, $conexion);
				/* Determino el número de registros recuperados */
					$cantidadDeRegistros=mysql_num_rows($hacerConsulta);
				if($cantidadDeRegistros == 0){	
					/*Si es igual 0 es por que 
					el usuario o la pass son incorrectos*/
					$msj = 'El usuario o la contrase&ntilde;a es incorrecta';
					$filas.= $abrirFilaYCelda.$msj.$cerrarCeldaYFila;
				}else{
					/*Los datos son correctos*/
					$destino = 'abm.php';
					header('location:'.$destino);
				}
			}else{
				/*Las variables no están cargadas*/
				$msj = 'El usuario o la contrase&ntilde;a es incorrecta';
				$filas.= $abrirFilaYCelda.$msj.$cerrarCeldaYFila;
			}
			break;
		default: //Código a ejecutar por default.
	}
	
?>
<form action="<?php echo $destino;?>" method="post">
  <table border="2" align="center">
    <?php echo $filas;?>
  </table>
  <table  border="0" align="center">
    <tr>
      <td><input type="submit" name="Submit" value="<?php echo $boton;?>" /></td>
    </tr>
  </table>
<?php
  	if($tingreso == 'Registrarse'){
		/*Solo creo los imput ocultos si biene de Registrarse*/
		echo '<input name="n_user" 
				type="hidden" 
				id="n_user" 
				value="'.$_POST['n_user'].'" />';
		echo '<input name="n_pass" 
				type="hidden" 
				id="n_pass" 
				value="'.$_POST['n_pass'].'" />';
	}
?>
</form>
</body>
</html>

