<?php
//create a connection
$connection = mysql_connect('localhost', 'root', '');
//check connection
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
//select database
$select_db = mysql_select_db('carparking');
if (!$select_db){
    die("Database Selection Failed".mysql_error());
}
?>
