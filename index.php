<?php


session_start();
require 'Database.php';
require 'Login.php';



    

$database = new Database();
$database->connect();

$login = new Login($usuario, $senha);
if ($login->authenticate() == true) {
    echo "authentication successful";
} else {
    echo "Authentication failed";
}
 



$database->disconnect();


?>

