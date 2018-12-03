<?php
date_default_timezone_set("Asia/Jakarta");
$host     = "localhost"; 
$user     = "root";
$pass     = "asd";
$database = "odos";
$jembatan = new mysqli($host,$user,$pass,$database);

if (mysqli_connect_errno()) {
  trigger_error('Astaghfirullah jembatan roboh: '  . mysqli_connect_error(), E_USER_ERROR);
}

?>