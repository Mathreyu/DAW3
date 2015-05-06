<?php
    include("util.php");
    if(isset($_POST['submit'])){
        session_start();
        if (isset($_POST['username']) && isset($_POST['pwd']) && isset($_POST['pwd2']))
        {
           $_SESSION['user'] = $_POST['username'];
            //Si las contraseñas son iguales
            if($_POST['pwd']==$_POST['pwd2']){
                $_SESSION['password'] = $_POST['pwd'];
            }else{
                        echo '<script language = javascript charset="UTF-8">
                        alert("Las contraseñas no coinciden")
                        self.location = "index.html"
                        </script>';
            }
        }
        include ("index.php");
    }
        if(isset($_POST['logout'])){
            session_start();
            session_unset();
            session_destroy();
            header("location:index.html"); //to redirect back to "index.php" after logging out
        }
        
    
?>