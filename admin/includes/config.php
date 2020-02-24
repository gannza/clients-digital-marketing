<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','7HSSceLN_forcarrenting');
define('DB_PASS','forcarrenting');
define('DB_NAME','7HSSceLN_carrental');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>