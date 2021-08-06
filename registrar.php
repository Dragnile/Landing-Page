<?php

 $registrar = mysqli_connect('localhost', 'root', '', 'registro')
 or die(mysql_error($mysqli));

insertar($registrar);

 function insertar($registrar){
   $name = $_POST['name'];
   $telefono = $_POST['telefono'];
   $correo = $_POST['correo'];


   $consulta = "INSERT INTO datos(nombre, telefono, correo)
   VALUES ('$name', '$telefono', '$correo')";
   mysqli_query($registrar, $consulta);
   mysqli_close($registrar);

 }


 ?>
