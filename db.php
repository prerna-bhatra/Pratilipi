<?php
/*
Author: Sajibe kanti
*/
?>

<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysqli_select_db($connection,"Pratilipi"); 
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
?>