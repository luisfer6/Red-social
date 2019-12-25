<?php 
require_once('models/querysModel.php');
require_once('models/cssModel.php');
$query1=new Querys();
$estilos= new cssModel();


$error=[

"nombre" => [],
"apellido" => [],
"email" => [],
"pregunta" =>[]

];


// Funcion creadora del archivo json en caso de no existir//
function crear_db(){
	$usuarios=["usuarios" => []];
	$usuario_json= json_encode($usuarios);
	file_put_contents("users.txt", $usuario_json);
}


//Funcion que valida si alguien introdujo un numero en un string//
function validacion($string){

	$abc="abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
	for ($i=0; $i<strlen($string) ; $i++) { 
		if(strpos($abc,substr($string,$i,1))===false){
			return false;
	    }
	}
	return true;

}
// Termina funcion de validacion de un string//


//Funcion que determina la validez de los campos pasado por $_POST dentro del registro//
function validacionDatos($datos){
	global $error;
	global $estilos;
	global $query1;
	if(empty($_POST["pregunta"]) || empty($_POST["respuesta"])){
		$error["pregunta"][]=["error","002"];
		$estilos->setPregyrest("clase","campo-invalido");
		$estilos->setPregyrest("mensaje","campo obligatorio");
		$estilos->setPregyrest("input_color","is-invalid");

	}else{
		$estilos->setPregyrest("input_color","is-valid");
		$estilos->setPregyrest("input_placeholder",$datos["respuesta"]);

	}



	if(strlen($datos["nombre"])==0){
		$error["nombre"][]=["error","002"];
		$estilos->setNombre("clase","campo-invalido");
		$estilos->setNombre("mensaje","campo vacio");
		$estilos->setNombre("input_color","is-invalid");

	}else if(strlen($datos["nombre"])<3){
		$error["nombre"][]=["error","003"];
		$estilos->setNombre("clase","campo-invalido");
		$estilos->setNombre("mensaje","minimo 3 digitos");
		$estilos->setNombre("input_color","is-invalid");

	}else if(!validacion($datos["nombre"])){
		$error["nombre"][]=["error","004"];
		$estilos->setNombre("clase","campo-invalido");
		$estilos->setNombre("mensaje","caracteres invalidos");
		$estilos->setNombre("input_color","is-invalid");

	}else{
		$estilos->setNombre("input_color","is-valid");
		$estilos->setNombre("input_placeholder",$datos["nombre"]);

	}

	if(strlen($datos["apellido"])==0){
		$error["apellido"][]=["error","002"];
		$estilos->setApellido("clase","campo-invalido");
		$estilos->setApellido("mensaje","campo vacio");
		$estilos->setApellido("input_color","is-invalid");

	}else if(strlen($datos["apellido"])<3){
		$error["apellido"][]=["error","003"];
		$estilos->setApellido("clase","campo-invalido");
		$estilos->setApellido("mensaje","minimo 3 digitos");
		$estilos->setApellido("input_color","is-invalid");

	}else if(!validacion($datos["apellido"])){
		$error["apellido"][]=["error","004"];
		$estilos->setApellido("clase","campo-invalido");
		$estilos->setApellido("mensaje","caracteres invalidos");
		$estilos->setApellido("input_color","is-invalid");

	}else{
		$estilos->setApellido("input_color","is-valid");
		$estilos->setApellido("input_placeholder",$datos["apellido"]);

	}

	if(strlen($datos["password"])==0){
		$error["password"][]=["error","002"];
		$estilos->setPassword("clase","campo-invalido");
		$estilos->setPassword("mensaje","campo vacio");
		$estilos->setPassword("input_color","is-invalid");

	}else if(strlen($datos["password"])<7){
		$error["password"][]=["error","003"];
		$estilos->setPassword("clase","campo-invalido");
		$estilos->setPassword("mensaje","minimo 7 digitos");
		$estilos->setPassword("input_color","is-invalid");

	}else{
		$estilos->setPassword("input_color","is-valid");
		$estilos->setPassword("input_placeholder",$datos["password"]);

	}

	if(strlen($datos["email"])==0){
		$error["email"][]=["error","002"];
		$estilos->setEmail("clase","campo-invalido");
		$estilos->setEmail("mensaje","campo vacio");
		$estilos->setEmail("input_color","is-invalid");

	}else if(!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)){
		$error["email"][]=["error","005"];
		$estilos->setEmail("clase","campo-invalido");
		$estilos->setEmail("mensaje","formato invalido");
		$estilos->setEmail("input_color","is-invalid");

	}else{
		if(!file_exists("users.txt")){
		    crear_db();
		 }

		$db_user_array=$query1->getDB();
		
		if($query1->repeatedEmail($_POST['email'])){
			$error["email"][]=["error","006"];
			$estilos->setEmail("clase","campo-invalido");
			$estilos->setEmail("mensaje","Email ya esta registrado");
			$estilos->setEmail("input_color","is-invalid");

		}
		

		if(count($error["email"])==0){
			$estilos->setEmail("input_color","is-valid");
			$estilos->setEmail("input_placeholder",$datos["email"]);

		}
	}
	if(count($error["nombre"])==0 && count($error["apellido"])==0 && count($error["email"])==0  && count($error["pregunta"])==0){
		    $profile_img="img/profile.jpg";
		    if($_FILES["foto"]["error"]==0){
		      move_uploaded_file($_FILES["foto"]["tmp_name"], "profileimg/".$_FILES["foto"]["name"]);
		      $profile_img="profileimg/".$_FILES["foto"]["name"];
		    }
		    if(isset($db_user_array)){
		    	$id=1;
		    }else{
		    $id=$db_user_array["usuarios"][count($db_user_array)-1]["id"]+1;}
		    require_once ('models/coderModel.php');
		    $pass=password_hash($_POST["password"], PASSWORD_DEFAULT);
		    $userObject= new Coder($id,$_POST["nombre"],$_POST["apellido"],$_POST["email"],$_POST["pregunta"],$_POST["respuesta"],$_POST["genero"],$pass,$profile_img);

		    if(!file_exists("users.txt")){
		    	crear_db();
		      
		    }else{
		      $query1->setDB($userObject);
		    }
		    $estilos= new cssModel();
		    $estilos->setEstado("alerta alert-success");

	}

}
//Termina la funcion de validacion de campos del registro//






 ?>