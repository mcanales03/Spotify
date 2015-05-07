<HTML>
	<head>
		<title>Login Spotify</title>
	</head>

	<body>
		<div align="center"><h1>Inicia Sesion en Spotify!</h1></div>
		<hr size="8px" color="green" />
		<hr size="15px" color="white"/>
		<div align="center">
		<table width="220" border="0" cellspacing="0" cellpadding="1"> 
		<tr bgcolor="green" align="center"> 
		<td><b><font color="#FFFFFF">Inicio de Sesion</font></b></td> 
		</tr> 
		<tr bgcolor="green"> 
		<td> 
		<table width="100%" border="0" cellspacing="0" cellpadding="4"> 
		<tr bgcolor="#FFFFFF"> 
		<td>
		
		<form name="iniciar" action="controllerLogin.php" method="POST">
   			<div><label>Usuario: </label> <input type="text" name = "usuario"/></div>
    		<div><label>Clave:</label> <input type="password" name = "contrasenia" /></div>
    		<div align="center"><input type="submit" name ="iniciar" value="iniciar"/></div>
		</form>
		</td> 
		
		</tr> 
		</table> 
		</td> 
		</tr> 
		</table>
		</div>
	</body>
</HTML>


