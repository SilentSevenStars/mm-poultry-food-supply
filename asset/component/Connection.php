<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'mm-poultry');

    try{
        $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    } catch(Exception $e){
        die("Error: ".mysqli_connect_error()."<br>".$e);
    }
?>