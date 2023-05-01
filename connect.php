<?php
$server = "localhost";
$username = "root";
$password = "";
    
$connection = mysqli_connect($server,$username,$password);

$createDB = "CREATE DATABASE IF NOT EXISTS OnlineScoreDb";

$createTable = "CREATE TABLE IF NOT EXISTS scoreTable(
matric VARCHAR( 10 ) NOT NULL PRIMARY KEY,
fullname VARCHAR( 30 ) NOT NULL ,
seng406 INT( 5 ) NOT NULL ,
seng412 INT( 5 ) NOT NULL ,
seng404 INT( 5 ) NOT NULL ,
seng408 INT( 5 ) NOT NULL 
)";

$connection->query($createDB);

$connection->select_db("OnlineScoreDb");

$connection->query($createTable);

?>