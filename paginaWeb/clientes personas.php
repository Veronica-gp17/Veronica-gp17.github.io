<?php
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDeDatos="vlsystem";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
    if(!$enlace){
        echo"Error en la conexion con el servidor";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styleclientespersonas.css">
    
    <script src="boton.js"></script>
</head>
<body>
<main class="main-form-container">
        <form method="POST" action = "index.php">
            <h2 class="form-client2--title">REGISTRO CLIENTE PERSONA NATURAL</h2>
            <h3 class="form-client2--subtitle"><p>TODOS LOS CAMPOS CON * SON OBLIGATORIOS</p></h3>
               <div class="form-box">
               <label for="Nombre">Nombre*</label>
                <input type="text" id="Nombre" name="Nombre" required><br>
            </div>
           <div class="form-box">
            <label for="Apellido">Apellido*</label>
                <input type="text" id="Apellido" name="Apellido" required><br>
           </div>
           <div class="form-box">
            <label for="Tipo de documento">Tipo de documento*</label>
                <select id="Tipo de documento" name="TipoDedocumento" required><br>
                    <option value="Cedula de ciudadania">cedula de ciudadania</option>
                    <option value="Cedula extranjera">cedula extranjera</option>
                    <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                </select>
           </div>
           <div class="form-box">
            <label for="Número de documento">Número de documento*</label><br>
                <input type="text" id="Número de documento" name="NumeroDeDocumento" required>
           </div>
           <div class="form-box">
            <label for="Correo electronico">Correo electronico*</label><br>
                <input type="email" id="Correo electronico" name="CorreoElectronico" required>
           </div>
           <div class="form-box">
            <label for="Número de celular">Número de celular</label><br>
                <input type="text" id="Número de celular" name="NúmeroDeCelular" required>
           </div>
           <div class="form-box">
            <label for="Vehiculo que solicita">Vehiculo que solicita*</label><br>
                <input type="text" id="Vehiculo que solicita" name="VehiculoQueSolicita" required>
           </div>
           <div class="form-box">
            <label for="Motivo">Motivo*</label><br>
                <input type="text" id="Motivo" name="Motivo" required>
           </div>
           <div>
                <input class="send-button" type="submit" value="ENVIAR" name= "ENVIAR">
            </div>
</body>
</html>
<?php
    if(isset($_POST['ENVIAR'])){
        $Nombre=$_POST["Nombre"];
        $Apellido=$_POST["Apellido"];
        $tipo_de_documento=$_POST["TipoDeDocumento"];
        $Numero_de_documento=$_POST["NumeroDeDocumento"];
        $Correo_electronico=$_POST["CorreoElectronico"];
        $numero_de_celular=$_POST["NumeroDeCelular"];
        $vehiculo_que_solicita=$_POST["TipoDeSangre"];
        $Motivo=$_POST["VehiculoQueManeja"];


 
        $InsertarDatos = "INSERT INTO registro_conductores VALUES('$Nombre', 
                                                                    '$Apellido', 
                                                                    '$tipo_de_documento',
                                                                    '$Numero_de_documento',
                                                                    '$Correo_electronico',
                                                                    '$numero_de_celular',
                                                                    '$vehiculo_que_solicita',
                                                                    '$Motivo')";


        $Ejecutarinsertar = mysqli_query($enlace, $InsertarDatos);

        if(!$Ejecutarinsertar){
            echo"Error en la linea de sql";
        }
        mysqli_close($enlace);
    }
?>