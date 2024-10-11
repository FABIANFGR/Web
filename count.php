<?php
$servername="localhost";
$username="root";
$password="";
$dbname="qr_count";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Conexion fallida " . $conn->connect_error);
    }
$sql = "UPDATE qr_count SET qr_count = qr_count + 1 WHERE id = 1";

if ($conn->QUERY($sql) === TRUE) {
    
} else {
    error_log("Error al actualizar el conteo: " . $conn->error;
    } 
    
$conn->close();

$numero="8296752293";
header("Location: https://wa.me/$numero");
exit();

?>

