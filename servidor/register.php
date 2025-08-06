<?php
require "conn.php";

// Obtener datos del POST
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$contraseña = $_POST['password'];

// Insertar datos en la base de datos
$sql = "INSERT INTO usuarios (nombre, email, telefono, contraseña) VALUES ('$name', '$email', '$telefono', '$contraseña')";
if ($conn->query($sql)) {
    echo json_encode(["success" => true, "message" => "Registro exitoso"]);
} else {
    echo json_encode(["success" => false, "message" => "Error: " . $sql . "<br>" . $conn->error]);
}