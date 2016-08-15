<?php 
define('host','localhost');
define('name','root');
define('pass','');
define('db','yolo');
$con = mysqli_connect(host,name,pass,db);
 mysqli_set_charset($con, 'utf8');
?>