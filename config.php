<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'db4free.net:3306');
define('DB_USERNAME', 'toboxtroll@localhost');
define('DB_PASSWORD', 'QAZplm123');
define('DB_NAME', 'ecbti_unad');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: No puede conectar a la base de datos. " . mysqli_connect_error());
}
?>