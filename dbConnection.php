<?php
define("HOSTNAME", "");
define("USERNAME", "");
define("PASSWORD", "");
define("DATABASE", "");

$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if( !$connection){
    echo "connection error";
}/*else{
    echo "connection successful";
}*/
?>
