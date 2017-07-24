<?php
$ds          = DIRECTORY_SEPARATOR;  //1

$storeFolder = 'files';
//$storeFolder = $_FILES['directory']['tmp_name']; //'files/graphic_images';   //2 //create input in js to send current directory?    //2
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
    {
        echo "RECEIVED ON SERVER: \n";
        echo "FILES: \n";
        print_r($_FILES);
        echo "\$_POST: \n";
        print_r($_POST);
        $storeFolder = ($_POST['directory']);
        $storeFolder = str_replace("#","",$storeFolder);
		$storeFolder = str_replace("%2F", "/", $storeFolder);
    }

if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
     
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5
 
    move_uploaded_file($tempFile,$targetFile); //6
     
}
?>