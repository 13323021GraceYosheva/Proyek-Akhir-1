<<<<<<< HEAD
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

=======
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

>>>>>>> 3f3c0cc9417be49b819c9518551879e5b4cf08fb
?>