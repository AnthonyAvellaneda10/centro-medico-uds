<?php 

require '../config/database.php';

$db=conectarDB();

$errores=[];

$codigo_producto='';
$nombre_comercial='';
$nombre_generico='';
$concentracion='';
$grupo_ter='';
$laboratorio='';
$especialidad='';
$forma_farma='';
$presentacion='';
$estado='';

if($_SERVER('REQUEST_METHOD'==='POST')){

$codigo_producto=mysqli_real_escape_string($db,$_POST[])


}



?>