<?php 

require_once('models/coderModel.php');
require_once('models/querysModel.php');

$query= new Querys();
$usuarios= $query->setUserDBs('mathi13@live.com');

foreach ($usuarios as $key => $value) {
	echo "<br>";
	echo $key." -> ";
	print_r($value);
}
//var_dump($usuarios);



 ?>