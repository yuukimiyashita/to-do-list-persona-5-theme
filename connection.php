<?php
 $usuario = 'root';
 $senha = '';
 $database = 'remind';
 $host = 'localhost';

 $mysqli = new mysqli($host, $usuario, $senha, $database);
 

 if($mysqli->error){
  die("Falha ao conectar: " . $mysqli->error);
 }

 if(isset($_POST['send'])){
     $remember = $_POST['remember'];
     $query = mysqli_query($mysqli, "INSERT INTO remember_me (remember) VALUES ('$remember')");
 }
    

?>