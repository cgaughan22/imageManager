<?php

$dir = "files";

// Run the recursive function 

$response = scan($dir);

if (isset($_POST['makeDirectory'])) {
        echo makeDirectory($_POST['makeDirectory']);
    }

// This function scans the files folder recursively, and builds a large array

function makeDirectory(){
    mkdir('files/New_Folder', 0777, true);
  	scan($dir);
}

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
