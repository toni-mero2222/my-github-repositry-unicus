<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'broker22';

$connection = new mysqli($host, $username, $password, $database);

// if ($connection == true){
//     echo 'connected';
// }else{
//     die('failed'.$connection_error());
// }