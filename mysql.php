<?php
require 'config.php';

function connect($servername, $dbname, $username, $password)
{
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e){
        echo "Connection failed: ". $e->getMessage();
    }
    
}

return connect($servername, $dbname, $username, $password);