<?php
$ds          = DIRECTORY_SEPARATOR;  //1

$usuario=$_POST['nomUsuario'];
$incidente=$_POST['idIncidente'];
$carpeta=$usuario.$incidente;
  if (!file_exists($carpeta)) {
      mkdir($carpeta, 0777, true);
}
$storeFolder = $carpeta;   //2

if (!empty($_FILES)) {

    $tempFile = $_FILES['file']['tmp_name'];          //3

    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4

    $targetFile =  $targetPath. $_FILES['file']['name'];  //5

    move_uploaded_file($tempFile,$targetFile); //6

}
?>
