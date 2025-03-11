<?php

define("USERNAME", "arka");
define("PASSWORD", "210755");

echo "Enter username: ";
$user = readline();

echo "Enter password: ";
$password = readline();

if(empty($user) || empty($password))
{
    echo "User name or password is blank";
}
else if ($user === USERNAME && $password === PASSWORD) 
{
    echo "Login successfull!\n";
} 
else 
{
    echo "Invalid username or password.\n";
}
