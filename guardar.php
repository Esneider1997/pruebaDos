<?php
include('conexion.php');

if(isset($_POST['documento'])){

    $nombres=strtoupper($_POST['nombre']);
    $telefono=strtoupper($_POST['telefono']);
    $correo=strtoupper($_POST['correo']);
    $pais=strtoupper($_POST['pais']);

    $sql = "INSERT INTO persona (nombre, celular, correo, pais) 
            VALUES ('$nombres', '$telefono', '$correo', '$pais')";

    if ($conn->query($sql) === TRUE) {
    echo "<h3>Registro Exitoso</h3>";

    //header('Location:candidatos.php');
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>