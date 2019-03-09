<?php
$db_host = "localhost"; // DATABASE HOST
$db_user = "florienzh"; // DATABASE USER
$db_pass = "hasanal123"; // DATABASE PASSWORD
$db_name = "gudang"; // DATABASE NAME

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Error: " . $e->getMessage());
}
?>