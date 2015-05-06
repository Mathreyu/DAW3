
<?php
$servername = "http://mysql.yamahaqro.com/";
$username = "dawm8";
$password = "hailtheking";
$dbname = "dawdata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
function NewUser() { 
	 $estado = $_POST['typeahead'];
	 $vivienda = $_POST['personas']; 
	 $comida = $_POST['food']; 
	 $banos = $_POST['baths']; 
	 $ropa = $_POST['clothes']; 
	 $query = "INSERT INTO preguntas (estado, vivienda,comida,banos,ropa) VALUES ('$estado','$vivienda','$comida','$banos','$ropa')"; 
	 $data = mysql_query ($query)or die(mysql_error()); 
	 if($data){
	  echo "Gracias por completar las preguntas";
	}}
$conn->close();
?>