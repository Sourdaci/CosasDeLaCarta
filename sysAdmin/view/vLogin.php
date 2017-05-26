<html lang="es">
	<head>
		<meta http-equiv="Content-type" content="text/html"; charset="UTF-8">
		<link rel="stylesheet" href="../individual.css" type="text/css" media="all" />
	</head>
	<body id="loginBody">
		<header id="headLogin">
			<h1>sysAdmin Login</h1>
		</header>
		<main>
			<div id='login'> 
				<form action='<?php $_SERVER['PHP_SELF']; ?>' method='post'>
					<fieldset style="width:20%;min-width:200px;"> 
						<legend>sysAdmin Login</legend> 
						<div><span class='error'><?php echo $_SESSION['errorLogin']; ?></span></div>
						<div class='campo'> 
							<label for='password' >Contraseña:</label><br/> 
							<input type='password' name='password' id='password' maxlength="50" /><br/> 
						</div> 

						<div class='campo'> 
							<input type='submit' name='enviar' value='Enviar' /> 
						</div> 
					</fieldset> 
				</form> 
			</div>
		</main>
	</body>
</html>