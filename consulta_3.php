<?php 
require "conexion.php"; 



$sql="SELECT * FROM `proyectos` WHERE 1"; 

$respuesta=mysqli_query($con,$sql); //relizar Query 
 

if(!$respuesta){die("Error de consulta y/o conexion");} 
 

$resJson=array(); //dereclarcion de vector   

while($r=$respuesta->fetch_assoc()){ 
 array_push($resJson,$r); // adicion de cada registro al vector 

} 

mysqli_close($con); //Cerrar la Conexion 

echo json_encode($resJson); //conversion a JSON 


?> 