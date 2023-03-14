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
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styleconductores.css">
    <link rel="stylesheet" href="./conductores.html">
    <script src="boton.js"></script>
</head>
<body>
    <main class="main-form-container">
        <form method="POST" action = "registroconductores.php">
            <h2 class="form-drivers--title">REGISTRO CONDUCTOR</h2>
            <h3 class="form-drivers--subtitle"><p>TODOS LOS CAMPOS CON * SON OBLIGATORIOS</p></h3>
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
            <label for="Tipo de sangre">Tipo de sangre</label><br>
                <input type="text" id="Tipo de sangre" name="TipoDeSangre" required>
           </div>
           <div class="form-box">
            <label for="Vehiculo que maneja">Vehiculo que maneja*</label><br>
                <input type="text" id="Vehiculo que maneja" name="VehiculoQueManeja" required>
           </div>

            <input class="send-button" type="submit" value="ENVIAR" name= "ENVIAR">

        </form>
    </main>
</body>
</html>
<?php
    if(isset($_POST['ENVIAR'])){
        $Nombre=$_POST["Nombre"];
        $Apellido=$_POST["Apellido"];
        $Tipo_de_documento=$_POST["TipoDeDocumento"];
        $Numero_de_documento=$_POST["NumeroDeDocumento"];
        $correo_electronico=$_POST["CorreoElectronico"];
        $Numero_de_celular=$_POST["NumeroDeCelular"];
        $tipo_de_sangre=$_POST["TipoDeSangre"];
        $vehiculo_que_maneja=$_POST["VehiculoQueManeja"];


 
        $InsertarDatos = "INSERT INTO registro_conductores VALUES('$Nombre', 
                                                                    '$Apellido', 
                                                                    '$Tipo_de_documento',
                                                                    '$Numero_de_documento',
                                                                    '$correo_electronico',
                                                                    '$Numero_de_celular',
                                                                    '$tipo_de_sangre',
                                                                    '$vehiculo_que_maneja')";


        $Ejecutarinsertar = mysqli_query($enlace, $InsertarDatos);

        if(!$Ejecutarinsertar){
            echo"Error en la linea de sql";
        }
        mysqli_close($enlace);
    }
?>