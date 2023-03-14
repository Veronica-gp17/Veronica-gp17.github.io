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
    <link rel="stylesheet" href="./styleclientes.css">
    <link rel="stylesheet" href="./formulariocleinteempresa.html">
    <script src="boton.js"></script>
</head>
<body>
<main class="main-form-container">
        <form method="POST" action = "Clientes.php">
            <h2 class="form-client--title">REGISTRO CLIENTE EMPRESA</h2>
            <h3 class="form-client--subtitle"><p>TODOS LOS CAMPOS CON * SON OBLIGATORIOS</p></h3>
               <div class="form-box">
               <label for="Nombre Empresa">Nombre Empresa*</label>
                <input type="text" id="Nombre Empresa" name="NombreEmpresa" required><br>
            </div>
            <div class="form-box">
            <label for="NIT">NIT*</label><br>
                <input type="text" id="NIT" name="NIT" required>
           </div>
           <div class="form-box">
            <label for="Razon Social">Razon Social*</label><br>
                <textarea id="Razon Social" name="RazonSocial" rows="1" required></textarea>
           </div>
           <div class="form-box">
            <label for="Número Telefonico">Número Telefonico</label><br>
                <input type="text" id="NúmeroTelefonico" name="NúmeroTelefonico" required>
           </div>
           <div class="form-box">
            <label for="Correo electronico">Correo electronico*</label><br>
                <input type="email" id="Correo Electronico" name="CorreoElectronico" required>
           </div>
           <div class="form-box">
            <label for="Vehiculo que solicita">Vehiculo que maneja*</label><br>
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
        $Nombre_empresa=$_POST["NombreEmpresa"];
        $NIT=$_POST["NIT"];
        $Razon_social=$_POST["RazonSocial"];
        $Numero_telefonico=$_POST["NúmeroTelefonico"];
        $Correo_electronico=$_POST["CorreoElectronico"];
        $Vehiculo_que_solicita=$_POST["VehiculoQueSolicita"];
        $Motivo=$_POST["Motivo"];


 
        $InsertarDatos = "INSERT INTO registro_cliente_empresa VALUES('$Nombre_empresa', 
                                                                    '$NIT', 
                                                                    '$Razon_social',
                                                                    '$Numero_telefonico',
                                                                    '$Correo_electronico',
                                                                    '$Vehiculo_que_solicita',
                                                                    '$Motivo')";


        $Ejecutarinsertar = mysqli_query($enlace, $InsertarDatos);

        if(!$Ejecutarinsertar){
            echo"Error en la linea de sql";
        }
        mysqli_close($enlace);
    }
?>