<?php

$file_name = 'test.txt';

// $file = fopen($file_name,'r') or die('Unable  to pen');

// echo 'File opened successfully';

// // Reading from a file

// //echo fread($file,filesize($file_name));

// while (!feof($file)) {
//     echo"<h3>".fgets($file)."</h3>";
// }
$file = fopen($file_name,'w') or die('Unable  to pen');

$new_text = "This is our new text";

fwrite($file,$new_text);

//fclose($file);

if(unlink($file_name)){
    echo "File deleted";
}else{
    echo "file not deleted";
}

