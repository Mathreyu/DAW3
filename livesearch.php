<?php
$q = intval($_GET['q']);

$con = mysqli_connect('http://mysql.yamahaqro.com/','dawm8','hailtheking','estados');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM user WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo 
    echo $row['salario'];

mysqli_close($con);
?>