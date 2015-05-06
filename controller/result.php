<?php
$servername = "http://mysql.yamahaqro.com/";
$username = "dawm8";
$password = "hailtheking";
$dbname = "dawdata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT pregunta_2 FROM preguntas WHERE idcliente = ";
$p2 = $conn->query($sql);
$sql = "SELECT pregunta_3 FROM preguntas WHERE idcliente = ";
$p3 = $conn->query($sql);
$sql = "SELECT pregunta_4 FROM preguntas WHERE idcliente = ";
$p4 = $conn->query($sql);
$sql = "SELECT pregunta_5 FROM preguntas WHERE idcliente = ";
$p5 = $conn->query($sql);
if ($p2 > 0 && $p3 > 0 && $p4 > 0 && $p5 > 0) {
   $result = (($p2 * 500)+($p3 * 700)+($p4 * 300) +($p5 * 20))/350.5
   echo "" . $row["result"]. "";
} else {
    echo "Error en base";
}
$conn->close();
?>