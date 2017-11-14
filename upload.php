<?php

/*SUBIDA LOCAL 
$ds= DIRECTORY_SEPARATOR;  //1
$storeFolder= $_POST['nomUsuario'].$_POST['idIncidente'];
if (!file_exists($storeFolder)){
	mkdir($storeFolder, 0755, true);
}
if (!empty($_FILES)) {

    $tempFile = $_FILES['file']['tmp_name'];          //3

    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4

    $targetFile =  $targetPath. $_FILES['file']['name'];  //5

    move_uploaded_file($tempFile,$targetFile); //6

}*/
$storeFolder= $_POST['nomUsuario'].$_POST['idIncidente'];
$ch = curl_init("https://content.dropboxapi.com/2/files/upload");
      $fp = fopen(realpath($file), 'rb');
      curl_setopt($ch, CURLOPT_PUT, true);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
      curl_setopt($ch, CURLOPT_INFILE, $fp);
      curl_setopt($ch, CURLOPT_INFILESIZE, filesize(realpath($file)));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $app = "/grupo13dssd/";
      $path = $app.$storeFolder;
      $dropbox_key = "YI0Ljfi3WFAAAAAAAAAAEmBs4wrpw14xH6Nkq3MxKswKAW1XJijhs2SuNTo1Tunn";
      $headers = array();
      $headers[] = "Authorization: Bearer " . $dropbox_key;
      $headers[] = "Dropbox-Api-Arg: {\"path\": \"" . $path . "\",\"mode\": \"add\",\"autorename\":true,\"mute\": false}";
      $headers[] = "Content-Type: application/octet-stream";
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $result = curl_exec($ch);
      if (curl_errno($ch)) {
          echo 'Error:' . curl_error($ch);
          return false;
      }
      curl_close ($ch);
?>  