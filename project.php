<?php
error_reporting(0);
$servername ="localhost";
$username ="root";
$password ="";
$dbname = "employeef";

$connection = mysqli_connect($servername,$username,$password,$dbname);

if($connection)
{
    //echo "connection ok";
}
else
{
    echo "connection fail".mysqli_connect_error();
}
?>