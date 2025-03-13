<?php

// $colors = ['red','blue','pink'];

// foreach($colors as $c) {
//     echo ''. $c .' ';
// }
// echo "\n";

// print_r($colors);

// foreach($colors as $c=>$a) {
//     echo 'Key '.$c." ".$a;
//     echo "\n";
// }
// echo "\n";



// function addition($var1, $var2)
// {
//     echo "result is  : ".$var1+$var2;
// }

// addition(2,4);

// $numbers = [1,2,3,4,5,6,7,8];


// function sum($digit)
// {
//     // print_r($digit);
//     $result = 0;
//     foreach($digit as $d)
//     {
//         $result += $d;
//     }

//     echo "Result is  : ".$result;
// }

// sum($numbers);

// function colorDiv()
// {
//     echo "<div style = 'padding : 25px'></div>";
// }

//indexed array
$arr = array('php', 'js', 'css', 'html');

//asociative array
$assArr = array(
    'name' => 'Mobin',
    'age' => 25
);

// echo $assArr['name'];

// foreach ($assArr as $key => $value) {
//     echo $key . ' => ' . $value . "\n";
// }


//multi-dimentional array
// $multiArr = array(
//     array('name' => 'mobin', 'age' => 25),
//     array('name' => 'amir', 'age' => 15),
//     array('name' => 'rahim', 'age' => 45),

// );

// // echo $multiArr[0][1];

// foreach ($multiArr as $outerArr) {
//     foreach ($outerArr as $key => $innerArr) {
//         echo $key . ' ' . $innerArr . "\n";
//     }
// }



//separator
// $str = "php js go java";
// $arr = explode(" ", $str,2);
// print_r($arr);


//array to string conversion
// $arr = array('php','js','java','python');

// $string = implode(',', $arr);
// echo $string;
// echo "\n";
// $string = join('|', $arr);
// echo $string;


//multi separator
// $str = "php js,go;java|python";
$str = 'https://example.com/category/file.php';
//$arr = preg_split('/\//',$str);
// Array
// (
//     [0] => https:
//     [1] =>
//     [2] => example.com
//     [3] => category
//     [4] => file.php
// )

$arr = preg_split('/\//',$str,-1,PREG_SPLIT_NO_EMPTY);
print_r($arr);
// Array
// (    
//     [0] => https:
//     [1] => example.com
//     [2] => category
//     [3] => file.php
// )



