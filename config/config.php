<?php
$dblocation = 'localhost';
$dbuser = 'root';
$dbpassword = '5287363_Maxim';
$dbname = 'shop';

$dbcon = mysqli_connect($dblocation, $dbuser, $dbpassword, $dbname);

if (!$dbcon){
    exit('Error connect DB');
}