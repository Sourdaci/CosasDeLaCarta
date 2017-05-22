<?php
	/*
	*
	* vLogin.php
	*
	*/
?>

<div id='login'> 
    <form action='<?php $_SERVER['PHP_SELF']; ?>' method='post'>
        <fieldset style="width:20%;min-width:200px;"> 
            <legend>Login</legend> 
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