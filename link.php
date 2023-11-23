<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db_sunucu="localhost";
$db_admin="root";
$db_password="";
$db_name="newwebsite";

$link=mysqli_connect($db_sunucu, $db_admin, $db_password, $db_name);

if (!$link)
{
    die("Could not connect to database.".mysqli_connect_error());
}


?>  