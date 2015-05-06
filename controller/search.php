<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysql_connect('http://mysql.yamahaqro.com/','dawm8','hailtheking');
    $db=mysql_select_db("estados",$con);
    $query=mysql_query("select * from estados where title LIKE '%{$key}%'");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['title'];
    }
    echo json_encode($array);
?>
