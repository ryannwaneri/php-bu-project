<?php

/*ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);*/

require "connect.php";

$getResult = "SELECT * FROM scoreTable;";

$result = $connection->query($getResult);

while($row = $result->fetch_assoc()){
    echo $row["matric"]."    ".$row["fullname"]."    ".$row["seng406"]."    ".$row["seng412"]."    ".$row["seng404"]."    ".$row["seng408"]."<br/>";
}

?>