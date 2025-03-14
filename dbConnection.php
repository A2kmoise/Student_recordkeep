<?php
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "crud_operations");

$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if( !$connection){
    echo "connection error";
}/*else{
    echo "connection successful";
}*/
?>