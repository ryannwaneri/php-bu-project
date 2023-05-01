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
        td {
            border: 1px solid;
            text-align: center;

        }
        input {
            width: 90%;
            display: grid;
            place-content: center;
        }

    </style>
</head>
<body>

<h1>Online Score Registration Portal</h1>

<div class="input-form">
        <form action = "index.php" method = "post">
       <table>
        <caption style="background-color: yellow;"><h1>Online Score Sheet</h1></caption>
        <tr>
            <td style="width: 600px; vertical-align: top; text-align: center;">
                <table style="border-spacing: 10px;">
                    <tr><td><a href="index.php">Score Entry</a></td></tr>
                    <tr><td><a href="view.php">Score View</a></td></tr>
                </table>
            </td>
            <td rowspan="3">
                <table style="width: 90vw; box-sizing: border-box;">
                    <tr>
                        <th style="font-size: 1.5rem;">Details Entry</th>
                    </tr>
                    <tr>
                        <td>Matric Number</td>
                        <td><input type="text" name="matric"></td>
                    </tr>
                    <tr>
                        <td>Full Name</td>
                        <td><input type="text" name="fullname"></td>
                    </tr>
                    <tr>
                        <th style="font-size: 1.5rem">Score Entry</th>
                    </tr>
                    <tr>
                        <td>SENG 406</td>
                        <td><input type="number" name="seng406"></td>
                    </tr>
                    <tr>
                        <td>SENG 412</td>
                        <td><input type="number" name="seng412"></td>
                    </tr>
                    <tr>
                        <td>SENG 404</td>
                        <td><input type="number" name="seng404"></td>
                    </tr>
                    <tr>
                        <td>SENG 408</td>
                        <td><input type="number" name="seng408" ></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" style="background-color: blue; font-size: 2rem;"></button></td>
                    </tr>
                </table>
            </td>
        </tr>            
    </table>
            
        </form>
</div>
    
</body>
</html>