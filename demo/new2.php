<?php

// <!-- php new2.php -->


$string = 'arka braja prasad nath';


//string length
echo strlen($string);

echo "\n";

//reverse
echo strrev($string);

echo "\n";

//string to lower
echo strtolower($string);

echo "\n";

//string to upper
echo strtoupper($string);


echo "\n";

$string = "hlw how are you?";


//first letter capital
echo ucfirst($string);


echo "\n";


//first letter of word capital
echo ucwords($string);

echo "\n";

$str1 = " file operation session ";
$str2 = " next sentence ";

echo $str1.$str2;

echo "\n";

//trim first and last sspace of sentetnce
echo trim($str1.$str2);


// PS F:\PHP\PHP LEARNING ostad\demo> php new2.php
// 22
// htan dasarp ajarb akra
// arka braja prasad nath
// ARKA BRAJA PRASAD NATH
// Hlw how are you?
// Hlw How Are You?
//  file operation session  next sentence
// file operation session  next sentence

$text = "PHP Essentials : string";

echo "\n";

echo substr($text,4,10);

echo "\n";

echo str_replace('string','File Operations',$text);

echo "\n";


$info = ['HTML','CSS','JS','PHP','MYSQL'];

echo 'My Skills are ',implode(' ',$info);

echo "\n";

$skills = 'HTML,CSS,JS,PHP,MYSQL';
echo "Developer require skill's are $skills";

echo "\n";

$databaseData = json_encode(explode('.',$skills));

var_dump($databaseData);






