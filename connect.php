<?php
$server = "localhost";
$username = "root";
$password = "";
    
$connection = mysqli_connect($server,$username,$password);

$createDB = "CREATE DATABASE IF NOT EXISTS OnlineScoreDb";

$createTable = "CREATE TABLE IF NOT EXISTS scoreTable(
Matric_Number VARCHAR( 10 ) NOT NULL PRIMARY KEY,
Full_Name VARCHAR( 30 ) NOT NULL ,
SENG406 INT( 2 ) NOT NULL ,
SENG412 INT( 2 ) NOT NULL ,
SENG404 INT( 2 ) NOT NULL ,
SENG408 INT( 2 ) NOT NULL 
)";

$connection->query($createDB);

$connection->select_db("OnlineScoreDb");

$connection->query($createTable);

?>