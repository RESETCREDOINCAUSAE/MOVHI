<?php
// Aquí van los datos de la conexión 
$servername = "localhost";
$database = "id17628488_movhi";
$username = "id17628488_form";
$password = "1233895437Babalon510.";
$licensia
// Crear la conexion a la base de datos 
$conn = mysqli_connect($servername, $username, $password, $database);
// Comprobar la conexión
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 $nombres = $apellidos= $celular= $modelo= $marca=   "";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombres = test_input($_POST["nombres"]);
    $apellidos = test_input($_POST["apellidos"]);
  $celular = test_input($_POST["celular"]);
  $modelo = test_input($_POST["modelo"]);
  $marca = test_input($_POST["marca"]);
 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 

$sql = "INSERT INTO Formulario (nombres, apellidos, celular,modelo,marca) VALUES ('$nombres', '$apellidos', '$celular', '$modelo', '$marca')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>