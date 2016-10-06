<?php
header('Content-Type: text/html;charset=UTF-8');
$usuario=$_POST['user'];
$pass=$_POST['password'];
include_once 'www/includes/bdd.php';
$con=crearConexion();
$con->set_charset("utf8");
$sql="call login_usuario(?,?,@valor_existe)";
$stmt = $con->prepare($sql);
$stmt->bind_param('ss', $usuario,$pass);
$stmt->execute();
$result2=$con->query("SELECT @valor_existe");
$row = $result2->fetch_assoc();
if ($row['@valor_existe']==0){
	echo "<script> alert ('Ingreso Invalido al sistema') </script>"; 
	echo "<script> window.location.assign('form_login.html') </script>";
	
}
else
{
	session_start();
	$_SESSION['time']=date('H:i:s');
	$_SESSION['username']=$usuario;
	$_SESSION['logueado']=true;
    header('location:welcome.php');
}

?>

