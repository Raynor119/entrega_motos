<?php
$hostname='127.0.0.1';
$database='motos';
$username='admin';
$password='admin';
$conexion= new mysqli($hostname,$username,$password,$database);   
if($conexion->connect_errno){
    echo "No se pudo Conectar";
    }else{
 } 

 $query="SELECT * FROM  USUARIO INNER JOIN PERSONA ON USUARIO.ID=PERSONA.CEDULA";
 $consulta = mysqli_query($conexion,$query);
 $tr="";
 
 while($row = mysqli_fetch_array($consulta)){

    $tr=$tr."
        <tr>
            <td>".$row['NOMBRE']."</td>
            <td>".$row['APELLIDO']."</td>
            <td>".$row['CEDULA']."</td>
            <td>".$row['EMAIL']."</td>
            <td>".$row['TELEFONO']."</td>
            <td><button type="."submit"." class="."text-center btn btn-success"." onclick="." EliminarU(".$row['CEDULA'].")".">Eliminar</button></td>

            
        </tr>
    ";

     
 }

 echo $tr;

?>