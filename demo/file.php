<?php

$file_name = 'test.txt';

$file = fopen($file_name,'r') or die('Unable  to pen');

echo 'File opened successfully';

// Reading from a file

echo fread($file,filesize($file_name));
