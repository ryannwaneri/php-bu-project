<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "connect.php";

$Matric = $_POST["Matric"];
$Full_Name = $_POST["Full_Name"];
$seng406 = $_POST["seng406"];
$seng412 = $_POST["seng412"];
$seng404 = $_POST["seng404"];
$seng408 = $_POST["seng408"];

if(isset($_POST["submit_scores"])){
    
    $insertData = "INSERT INTO scoreTable (Matric_Number,Full_Name,seng406,seng412,seng404,seng408)
    VALUES(
        '$Matric',
        '$Full_Name',
        $seng406,
        $seng412,
        $seng404,
        $seng408
    )
    ";

    $connection->query($insertData);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Scores</title>
</head>
<body>

<form action = "score_entry.php" method = "post">
    <ol>
        <li>
            Enter your matric number<br/>
            <input type = "text" name = "Matric">
        </li>
        <li>
            Enter your full name<br/>
            <input type = "text" name = "Full_Name">
        </li>
        <li>
            Enter your score for seng406<br/>
            <input type = "text" name = "seng406">
        </li>
        <li>
            Enter your score for seng412<br/>
            <input type = "text" name = "seng412">
        </li>
        <li>
            Enter your score for seng404<br/>
            <input type = "text" name = "seng404">
        </li>
        <li>
            Enter your score for seng408<br/>
            <input type = "text" name = "seng408">
        </li>
        <li>
            <input type = "submit" name = "submit_scores" value = "submit scores">
        </li>
    </ol>
</form>
    
</body>
</html>