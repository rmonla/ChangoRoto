<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Clinica Chango Roto</title>
<style type="text/css">
<!--
.Estilo1 {color: #0066FF}
.Estilo2 {color: #FF0000}
-->
</style>
</head>
<body>

<div align="center">
  <table width="80%" height="274" border="1" align="center" cellpadding="20">
    <tr>
      <td height="202"><img src="images/001.jpg" width="945" height="160" align="middle" /></td>
    </tr>
    <tr>
		<form name="registro" method="POST" action="index.php">
			<td height="64">
				<div align="center">
				  <h1 class="Estilo2"><span class="Estilo2">- BIENVENIDO</span> - </h1>
				</div>
				<span class="Estilo1">
				<label>
				<div align="center"><span class="Estilo1">Su nombre de Usuario es  :
				  
				  <input type="text" name="user" size="20" value="<? echo $_POST["user"];?>"/>
				  , ya puede utilizar los servicios del Sistema	de	la	Clinica Chango Roto	</span></div>
				<span class="Estilo1">
				</label>
		        </span></td>
		    <tr>
				<td>
				  <div align="center">
				    <input name="bot_reg" type="submit" class="Estilo2" value="Ingrese" />
				  </div></td>
			</tr>
		</form>	  
</table>
</div>
</body>
</html>
