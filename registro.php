<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Clinica Chango Roto</title>
<style type="text/css">
<!--
.Estilo1 {font-weight: bold}
.Estilo2 {
	color: #FF0000;
	font-weight: bold;
}
.Estilo3 {
	color: #0033FF;
	font-weight: bold;
}
.Estilo4 {color: #0033FF}
-->
</style>
</head>
<body>
<?
	// process form
	$link = mysql_connect("localhost", "root");
	mysql_select_db("chango");
	$sql = "INSERT INTO usuarios (user,pass,pass2,ape,nomb,dni,ocup,dire,tel,loc,prov)";
	$result = mysql_query($sql);
?>
<div align="center">
  <table width="80%" height="504" border="1" align="center" cellpadding="20">
    <tr>
      <td><img src="images/001.jpg" width="945" height="160" align="middle" /></td>
    </tr>
    <tr>
		<form name="registro" method="POST" action="confirm.php">
		<input type="hidden" name="pass" size="20" value="<? echo $_POST["pass"];?>"/>
		<input type="hidden" name="r_pass" size="20" value="<? echo $_POST["r_pass"];?>"/>
			<tr>
			<td><span class="Estilo2">Datos Personales del Usuario:</span>
			  <div align="left">
			</div>
	          <table width="937">
	            <tr>
                  <td><div align="right" class="Estilo3">Usuario: </div></td>
	              <td><div align="center"><?php echo $_POST["n_user"];?></div></td>
	              <td colspan="2" rowspan="1">&nbsp;</td>
                </tr>
	            
	            <tr>
                  <td><div align="right" class="Estilo3"><strong>Nombre</strong>: </div></td>
	              <td><div align="center">
	                <input name="nomb" type="text" size="30"/>
	                </div></td>
	              <td><div align="right" class="Estilo4"><strong>Tel&eacute;fono:</strong></div></td>
	              <td><div align="center">
	                <input name="telef" type="text" size="30"/>
	                </div></td>
                </tr>
	            <tr>
	              <td><div align="right" class="Estilo3">Apellido: </div></td>
		    	  <td><div align="center"><input name="ape" type="text" size="30"/></div></td>
				  <td><div align="right" class="Estilo4"><strong>Ocupacion:</strong></div></td>
		    	  <td><div align="center"><input name="ocup" type="text" size="30"/></div></td>
				</tr>
	            <tr>
                  <td><div align="right" class="Estilo4"><strong>E-Mail: </strong> </div></td>
	              <td><div align="center">
	                <input name="email" type="text" size="30"/>
	                </div></td>
	              <td><div align="right" class="Estilo4"><strong>Direccion:</strong></div></td>
	              <td><div align="center">
	                <input name="direc" type="text" size="30"/>
	                </div></td>
                </tr>
	            <tr>
	              <td><div align="right" class="Estilo4"><strong>DNI: </strong> </div></td>
		    	  <td><div align="center"><input name="dni" type="text" size="30"/></div></td>
				  <td><div align="right" class="Estilo4"><strong>Localidad y Prov:</strong></div></td>
		    	  <td><div align="center"><input name="locprov" type="text" size="30"/></div></td>
				</tr>
              </table>
            <div align="center">
		    <input name="bot_reg" type="submit" class="Estilo2" value="Registrarse" />
		    <input name="bot_reg" type="reset" class="Estilo2" value="Borrar" />
	      </div>
		</form>	  
    </tr>
</table>
</div>
</body>
</html>
