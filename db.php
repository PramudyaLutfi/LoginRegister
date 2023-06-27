<?php
if ($_SERVER['PHP_SELF'] == "/jmpl/db.php"){
    if ($_SERVER['REQUEST_METHOD'] != "POST") {
        header("location: index.php");
        die();
    }
}
// Change servername and port
$servername = "localhost";
$username = "root";
$password = "";
$database = "JMPL";

// Create connection
try{
    $conn = new mysqli($servername, $username, $password, $database);
} catch(Exception $e){
    die("Database connection failed");
}

?>