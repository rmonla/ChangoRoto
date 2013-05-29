<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Clinica Chango Roto</title>
<style type="text/css">
<!--
.Estilo2 {color: #FF0000; font-weight: bold; }
.Estilo3 {color: #0066FF; font-weight: bold; }
.Estilo4 {color: #696969}
.Estilo6 {color: #0099FF; font-weight: bold; }
.Estilo9 {color: #FF0000; }
-->
</style>
</head>
<body>
<div align="center">
<table width="99%" height="477" border="1" align="center" cellpadding="20">
    <tr>
      <td height="202"><div align="center"><img src="images/001.jpg" width="945" height="160" align="middle" /></div></td>
    </tr>
	<tr>
		<td bgcolor="#99CCFF">
			<form name="alta" action="abm.php" method"post">
				<table width="100%" border="1" cellpadding="20">
  					<tr>
    					<td colspan="2"><div align="center" class="Estilo3">DATOS PERSONALES </div></td>
   					  <td width="60%" colspan="4"><div align="center" class="Estilo2">DATOS CLINICOS </div></td>
    				</tr>
  					<tr>    					
					<td colspan="2" bgcolor="#CCCCCC" class="Estilo3">
<table width="92%" border="1" cellpadding="20">
  <tr>
    <td width="34%"><div align="center">APELLIDO:</div></td>
    <td width="66%">      <input type="ape" name="textfield" size="40"/>    </td>
  </tr>
  <tr>
    <td><div align="center">NOMBRE:</div></td>
    <td>      <input type="nomb" name="textfield" size="40"/>    </td>
  </tr>
  <tr>
    <td><div align="center">DNI:</div></td>
    <td>      <input type="dni" name="textfield" size="40"/>    </td>
  </tr>
  <tr>
    <td><div align="center">TELEFONO:</div></td>
    <td>      <input type="telef" name="textfield" size="40"/>    </td>
  </tr>
  <tr>
    <td><div align="center">DIRECCION:</div></td>
    <td>      <input type="dire" name="textfield" size="40"/>    </td>
  </tr>
  <tr>
    <td><div align="center">PROVINCIA:</div></td>
    <td>      <input type="prov" name="textfield" size="40"/>    </td>
  </tr>
  <tr>
    <td><div align="center">LOCALIDAD</div></td>
    <td>      <input type="loc" name="textfield" size="40"/>    </td>
  </tr>
  <tr>
    <td><div align="center">MAIL:</div></td>
    <td>      <input type="mail" name="textfield2" size="40"/>    </td>
  </tr>
</table>					</td>
    					<td colspan="4" valign="top" bgcolor="#CCCCCC" class="Estilo2">
							<div align="center">
			  					ALTURA: 
			    					<input name="alt" type="text" size="10"/>
			  					PESO: 
			  						<input name="pes" type="text" size="10" />
								SEXO: 
			  						<input name="pes" type="text" size="10" />
			  					IMC: 
			  						<input name="imc" type="text" size="10"/>
			  					<br>
			 			 		<br>
			  					PRESION --> 
			  					DIASTOLICA: 
			  						<input name="pesd" type="text" size="10"/>
			  					SISTOLICA: 
			  						<input name="pess" type="text" size="10"/>
			  					<br>
			  					<br>
			  					OBRA SOCIAL: 
			  						<input name="obsc" type="text" size="20"/>
			  					PARTICULAR: 
			  						 <input name="part" type="text" size="30"/><br><br>
			  					N&ordm; OBRA SOCIAL: 
			  						 <input name="nobs" type="text" size="10"/>
			  					N&ordm; HISTORIA CLINICA: 
                                	<input name="nhc" type="text" size="10"/><br><br>
								MOTIVO DE CONSULTA: 
			  						 <input name="nobs" type="text" size="30"/><br><br>
			  					INSUMOS UTILIZADOS:<br>
			  					<textarea name="insum" cols="90" rows="10"></textarea>
			  					<br>
			  					<br>			  					
                              <br>
       					  </div>						 </td>
    				</tr>
			  </table>
					<div align="center">
					 <br>
					  <input name="enviar" type="submit" class="Estilo2" value="ENVIAR"/>
			         <br>
			  </div>
			</form>		
	  </td>
	</tr>
</table>
</div>
</body>
</html>
