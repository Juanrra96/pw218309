
<?php 

//Ejemplo de conexion a un servidor y BD

$servidor="localhost"; //127.0.0.1
$usuario ="root";
$password= "";
$basedatos="pw09";

$conexion=mysqli_connect($servidor,$usuario,$password,$basedatos);
$sql="select ncontrol, nombre, apellido,edad from alumnos";
$resultado=mysqli_query($conexion,$sql);
$arregloDatos = array();
if(mysqli_num_rows($resultado) > 0){
	while($registro=mysqli_fetch_array($resultado)){
		$arregloDatos[] = $registro;
		//array_push($arregloDatos, $registro);
	}
}
//print($arregloDatos);
// Y si quiero JSON 
print json_encode($arregloDatos);
 ?>