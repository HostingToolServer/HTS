<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia Sesion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./Css/modal.css">
	
	<script>
		function actualizapagina() {
			var control='<?php echo @$_GET["mensaje"];?>';
 	        if(control == 1)
				alert("... !USUARIO O CONTRASEÑA INCORRECTOS¡ ...");
        }
		
		function Validar() {
			if(document.inicio.name.value == "") {
				alert("... DIGITE EL NOMBRE CORRECTAMENTE ...");
	            document.inicio.name.focus(); 
	            return false;	
	        }
            if(document.inicio.email.value == "") {
				alert("... DIGITE EL CORREO ELECTRONICO ...");
	            document.inicio.email.focus(); 
	            return false;	
	        }
			if(document.inicio.password.value == "") {
				alert("... DIGITE LA CONTRASEÑA ...");
	            document.inicio.password.focus(); 
	            return false;	
	        }
		}
		
		function Iniciar() {
			if(document.validar.usuario.value == "") {
				alert("... DIGITE EL USUARIO CORRECTAMENTE ...");
	            document.validar.usuario.focus(); 
	            return false;	
	        }
            if(document.validar.contrasena.value == "") {
				alert("... DIGITE LA CONTRASEÑA CORRECTAMENTE ...");
	            document.validar.contrasena.focus(); 
	            return false;	
	        }
		} 
	</script>
</head>
<body onLoad="actualizapagina()">
    <div class="title">
        <p>Hosting Tool Server</p>
        <p></p>
    </div>
    <div class="container" id="container">
        <div class="Form-container sign-up">
            <form name="inicio" id="inicio" action="script/guardar.php" method="post">
                <h1>Crea Tu Cuenta</h1>
            
                <span> usa tu email para registrate</span>
                <input type="text" id="name" name="name" placeholder="Name"  >
                <input type="email" id="email" name="email" placeholder="Email"  >
                <input type="password" id="password" name="password" placeholder="Password" >
                <button type="button" onClick="Validar()">Registrate</button>
            </form>
        </div>
        <div class="Form-container sign-in">
            <form name="validar" id="validar" action="script/validar.php" method="post">
                <h1>Inicia Sesion</h1>
                <span>usa tu email para iniciar sesion</span>
                <input type="email" id="usuario" name="usuario" placeholder="Email" title="Digite el correo Electrónico">
                <input type="password" id="contrasena" name="contrasena" placeholder="Password" >
                <a href="#">Olvide mi contraseña</a>
                <button type="button" onClick="Iniciar()">Accede</button>
            </form>
        </div>
        <div class="toggle-container" >
            <div class="toggle">
                    <div class="toggle-panel toggle-left">
                        <h1>
                            
                            Ya eres miembro?
                        </h1>
                            <p>
                              
                                Accede a tu cuenta para usar tus privilegios
                            </p>
                            <button class="hidden" id="login">Accede</button>
                    </div>
                    <div class="toggle-panel toggle-right">
                        <h1>
                            Eres nuevo por aqui?
                        </h1>
                        <p>
                            Crea tu cuenta para obtener privilegios
                            
                        </p>
                        <button class="hidden" id="register"> Registrate</button>
                </div>
            </div>
        </div>
    </div>
    <script src="./script/login.js"></script>
</body>
</html>