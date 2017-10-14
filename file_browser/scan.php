<?php

$dir = "files";

// Run the recursive function 

//http://php.net/manual/en/function.unlink.php

$response = scan($dir);

if (isset($_POST['makeDirectory'])) {
	$fldName = ($_POST['folderName']);
	$dir = ($_POST['makeDirectory']);
	$dir = str_replace("#","",$dir);
	$dir = str_replace("%2F", "/", $dir);
	$dir = $dir . "/" . $fldName;
	echo $dir;
    mkdir($dir, 0777, true);
}

if (isset($_POST['delFile'])) {
	$file = ($_POST['delFile']);
	$dir = ($_POST['directory']);
	$dir = str_replace("#","",$dir);
	$dir = str_replace("%2F", "/", $dir);
	$filepath = $dir . "/" . $file;
	echo $filepath;
    unlink($filepath);
}

if (isset($_POST['delFolder'])) {
	$folder = ($_POST['delFolder']);
	$dir = ($_POST['directory']);
	$dir = str_replace("#","",$dir);
	$dir = str_replace("%2F", "/", $dir);
	$folderpath = $dir . "/" . $folder;
	echo $folderpath;
    rmdir($folderpath);
}

// This function scans the files folder recursively, and builds a large array

function scan($dir){

	$files = array();

	// Is there actually such a folder/file?

	if(file_exists($dir)){
	
		foreach(scandir($dir) as $f) {
		
			if(!$f || $f[0] == '.') {
				continue; // Ignore hidden files
			}

			if(is_dir($dir . '/' . $f)) {

				// The path is a folder

				$files[] = array(
					"name" => $f,
					"type" => "folder",
					"path" => $dir . '/' . $f,
					"items" => scan($dir . '/' . $f) // Recursively get the contents of the folder
				);
			}
			
			else {

				// It is a file

				$files[] = array(
					"name" => $f,
					"type" => "file",
					"path" => $dir . '/' . $f,
					"size" => filesize($dir . '/' . $f) // Gets the size of this file
				);
			}
		}
	
	}

	return $files;
}



// Output the directory listing as JSON

header('Content-type: application/json');

echo json_encode(array(
	"name" => "files",
	"type" => "folder",
	"path" => $dir,
	"items" => $response
));
