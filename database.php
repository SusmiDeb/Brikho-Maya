<!?php
/*error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(1);*/


/**************ERROR ON**********************/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<?php
$servername 	= "localhost";
$username 		= "root";
$password 		= "";
$dbname 		= "tree_shop";


$conn = mysqli_connect($servername, $username, $password, $dbname);
?>