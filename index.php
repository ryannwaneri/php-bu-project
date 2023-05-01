<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "connect.php";


if(isset($_POST["submit_scores"])){
    $matric = $_POST["matric"];
    $fullName = $_POST["fullname"];
    $seng406 = $_POST["seng406"];
    $seng412 = $_POST["seng412"];
    $seng404 = $_POST["seng404"];
    $seng408 = $_POST["seng408"];
    
    $insertData = "INSERT INTO scoreTable (matric, fullname, seng406, seng412, seng404, seng408)
    VALUES(
        '$matric',
        '$fullName',
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
    <style>
        h1{
            text-align: center;
        }

        .input-form{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        input{
            padding: 5px;
            margin: 7px;
            margin-left: 30px;
        }
    </style>
</head>
<body>

<h1>Online Score Registration Portal</h1>

<div class="input-form">
        <form action = "" method = "post">
       
                <div class="matric-entry">
                    <label for="matric">Enter your matric number</label>
                    <input type = "text" name = "matric">
                </div>

                <div class="fullname-entry">
                    <label for="fullname">Enter your full name</label>
                    <input type = "text" name = "fullname">
                </div>
           
                <div class="seng406-entry">
                    <label for="seng406">Enter your score for seng406</label>
                    <input type = "text" name = "seng406">
                </div>
           
                <div class="seng412-entry">
                    <label for="seng412">Enter your score for seng412</label>
                    <input type = "text" name = "seng412">
                </div>
            
                <div class="seng404-entry">
                    <label for="seng404">Enter your score for seng404</label>
                    <input type = "text" name = "seng404">
                </div>
            
                <div class="seng408-entry">
                    <label for="seng408">Enter your score for seng408<label>
                    <input type = "text" name = "seng408">
                </div>
           
                <input type = "submit" name = "submit_scores" value = "submit scores">
            
        </form>
</div>
    
</body>
</html>