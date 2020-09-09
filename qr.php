<?php
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$celular=$_POST['celular'];
$empresa=$_POST['empresa'];
$cargo=$_POST['cargo'];
$id=$_POST['id'];
$sizeqr=$_POST['sizeqr'];

$mensaje="Nombre: ".$name."\n";
$mensaje .="Apellido: ".$lastname."\n";
$mensaje .="Celular: ".$celular."\n";
$mensaje .="Empresa: ".$empresa."\n";
$mensaje .="Cargo: ".$cargo."\n";
$mensaje .="Id: ".$id;

include('vendor/autoload.php');
use Endroid\QrCode\QrCode;

$qrCode = new QrCode($mensaje);
$qrCode->setSize($sizeqr);
$image= $qrCode->writeString();

 $imageData = base64_encode($image);

echo '<img src="data:image/png;base64,'.$imageData.'">';

?>

