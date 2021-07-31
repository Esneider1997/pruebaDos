<?php
include('conexion.php');

if(isset($_POST['nombre'])){

    $nombre=strtoupper($_POST['nombre']);
    $celular=strtoupper($_POST['celular']);
    $correo=strtoupper($_POST['correo']);
    $pais=$_POST['pais'];

    $sql = "INSERT INTO persona (nombre, celular, correo, pais) 
            VALUES ('$nombre', '$celular', '$correo', '$pais')";

    if ($conn->query($sql) === TRUE) {
    echo "<h3>Registro Exitoso</h3>";

    //header('Location:candidatos.php');
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>
