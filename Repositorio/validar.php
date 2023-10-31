<?php
$usuario = $_POST['correo'];
$pass = $_POST['password'];
 
if(empty($usuario) || empty($pass)){
    header("Location: prueba.php");
    exit();
}

include_once 'connect.php';
$mysqli = new mysqli($servername,$username,$password,$database);
$sql_query="SELECT * from usuario WHERE email='$usuario'";



$resultado = $mysqli->query($sql_query);
if($resultado->num_rows){
    while(($row = $resultado->fetch_assoc()))
    {
        if($row['password'] == $pass && $row['email'] == $usuario){            
            $_SESSION['email'] = $usuario;
           // echo "conexion exitosa..." . "\n";
           // return true;
           
            session_start();
            echo "<script>alert('Este usuario se a conectado correctamentes'); window.location.href='pagina-protegida.php';</script>";
            return true;
       
            // header("Location: prueba.php");
        }
        
        
    }
}else{
    //  echo "no eres usuario";
    
        echo "<script>alert('No eres usuario');</script>";
}
?>