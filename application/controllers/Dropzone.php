<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dropzone extends CI_Controller {

	 
	

    function upload()
    {

	$ds          = DIRECTORY_SEPARATOR;  //1
 
		$storeFolder = 'uploads';   //2
 
	if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath = getcwd().$ds.$storeFolder.$ds;  //4
     
    $targetFile =  $targetPath.$_FILES['file']['name'];  //5


    $numArray = count($tempFile);
    print_r($tempFile);
    print_r($targetFile);
 
    //move_uploaded_file($tempFile,$targetFile); //6
     
}
    }

}

 