<?php 

require "conexion.php"; 



$sql="SELECT * FROM `usuario` WHERE 1"; 

$respuesta=mysqli_query($con,$sql); 
 

if(!$respuesta){die("Error de consulta");} 
 

$resJson=array(); //dereclarcion de vector   

while($r=$respuesta->fetch_assoc()){ 
 array_push($resJson,$r); // adicion de cada registro al vector 

} 

mysqli_close($con); //Cerrar la Conexion 

echo json_encode($resJson); //conversion a JSON 


?> 