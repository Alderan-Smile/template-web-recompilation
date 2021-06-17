<?php
$my_host = "localhost";
$my_db = 'cuestlsch';
$my_db_username = "root";
$my_db_passwd = "";
try {
 $connectDU = new PDO("mysql:host=$my_host;dbname=$my_db", $my_db_username, $my_db_passwd);
 
 if($connected){
 echo "Database connection successfull.";
 }
 
} catch (Exception $ex) {
 echo $ex->getMessage();
}
?>