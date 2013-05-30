<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Clinica Chango Roto</title>
<style type="text/css">
<!--
.Estilo1 {
	color: #0066FF;
	font-weight: bold;
}
.Estilo2 {color: #FFFFFF}
.Estilo3 {
	color: #FF0000;
	font-weight: bold;
}
.Estilo4 {color: #FF0000}
-->
</style>
</head>
<body>


<div align="center">
  <table width="80%" border="1" align="center" cellpadding="20">
    <tr>
      <td colspan="2"><img src="images/001.jpg" width="945" height="160" align="middle" /></td>
    </tr>
    <tr>
		<td width="50%"><p align="center" class="Estilo1">Si todavia no esta Registrado, REGISTRESE ahora</p>
		<form name="registro" method="POST" action="validacion.php">
		  <div align="center">
	    <table>
			    	<tr>
		      		  <td><div align="right" class="Estilo3">Nombre de Usuario: </div></td>
				    	<td><div align="center"><input name="n_user" type="text"  tabindex="5" value="<?php if(isset($_POST['n_user']))echo $_POST["n_user"];?>" />
				    	</div></td>
					</tr>
					<tr>
			      		<td><div align="right" class="Estilo3">Password:</div></td>
				    	<td><div align="center"><input name="n_pass" type="password"  tabindex="6" /></div></td>
					</tr>
					<tr>
			      		<td><div align="right" class="Estilo4"><strong>Reingrese su Password</strong>:</div></td>
				    	<td><div align="center"><input name="n_rpass" type="password"  tabindex="7" /></div></td>
					</tr>
				</table>
			</div>
		  <div align="center">
		  <br>
		    <input name="bot_reg" type="submit" class="Estilo1" value="Registrarse"  tabindex="8" />
		    <input name="bot_reg" type="reset" class="Estilo1" value="Borrar"  tabindex="9" />
	      </div>
		</form>		
		</td>
        <td width="50%"><p align="center" class="Estilo1">Si es Usuario Registrado. Ingrese sus Datos</p>
          <form name="log" method="post" action="validacion.php" >
			<div align="center">
				<table>
			    	<tr>
		      		  <td><div align="right" class="Estilo4"><strong>Nombre de Usuario: </strong></div></td>
				    	<td><div align="center"><input name="user" type="text"  tabindex="1" /></div></td>
					</tr>
					<tr>
			      		<td><div align="right" class="Estilo4"><strong>Password:</strong></div></td>
				    	<td><div align="center"><input name="pass" type="password"  tabindex="2" /></div></td>
					</tr>
					<tr>
			      		<br>
					</tr>
				</table>
			</div>
			<div align="center">
		  <br>
		    <input name="bot_reg" type="submit" class="Estilo1" value="Loguearse"   tabindex="3" />
		    <input name="bot_reg" type="reset" class="Estilo1" value="Borrar"  tabindex="4" />
	      </div>
		</form>
		</td>
    </tr>
  </table>
</div>
</body>
</html>
