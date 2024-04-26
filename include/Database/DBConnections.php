<?php

session_start();

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'puskesmas';

$koneksi = mysqli_connect($host,$username,$password,$database) or die();

function BaseUrl(){
    $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    return $actual_link;
}

?>