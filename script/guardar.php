<?php
    $conectar = new MySQLi("localhost", "root", "", "hostingtoolserver");

    $consulta="INSERT INTO usuarios VALUES('', '".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["password"]."')";
    $consulBD=mysqli_query($conectar, $consulta);

    header("location:../Alterpages/index.php");
?>