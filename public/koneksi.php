<?php
$username = "root";
$password = "";
$database = "reslab";
$host =  "localhost";

return new PDO("mysql:host=$host;dbname=$database;user=$username;password=$password");

?>