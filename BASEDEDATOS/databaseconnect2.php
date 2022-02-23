<?php
// Estos son los datos SQL en myPHPmyadmin
$servername = "localhost";
$database = "id17628488_movhi";
$username = "id17628488_form";
$password = "1233895437Babalon510.";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Conectado perfectamente";
mysqli_close($conn);
?>