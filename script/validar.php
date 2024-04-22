<?php
    $conectar = new MySQLi("localhost", "root", "", "hostingtoolserver");

    $sql = "SELECT CURDATE()";
    $rs = mysqli_query($conectar, $sql); 
    while($row = mysqli_fetch_row($rs)) {
        $zona_horaria = "-5";
        $formato = "Y-m-d"; 
        $hoy = gmdate($formato,time()+($zona_horaria*3600));

        $zona_horaria = "-5";
        $formato = "H:i:s"; 
        $hora = gmdate($formato,time()+($zona_horaria*3600));
    }
    
    $idUsuario="";
    $sql = "SELECT id_usuario FROM usuarios WHERE nombres='".$_POST["usuario"]."'";
	$rs = mysqli_query($conectar, $sql);
	while($row=mysqli_fetch_row($rs)) {
		$idUsuario=$row[0];
	}

    $sql = "SELECT * FROM usuarios WHERE nombres='".$_POST["usuario"]."' AND contrasena='".$_POST["contrasena"]."'";
	$rs = mysqli_query($conectar, $sql);
	if(mysqli_num_rows($rs)>0) { 
		while($row=mysqli_fetch_row($rs)) {
			$consulta="INSERT INTO inicio_sesiones VALUES('', '$idUsuario', '$hoy', '$hora')";
            $consulBD=mysqli_query($conectar, $consulta);
			
			 header("location:../Alterpages/main.html");
		}
	} else {
		 header("location:../Alterpages/index.php?mensaje=1");
	}
?>