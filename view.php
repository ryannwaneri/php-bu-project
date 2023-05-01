<html>
    <table>
        <th>Matric Number</th>
        <th>Full Name</th>
        <th>SENG 406</th>
        <th>SENG 412</th>
        <th>SENG 404</th>
        <th>SENG 408</th>
    </table>

<?php

/*ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);*/
require "connect.php";

$getResult = "SELECT * FROM scoreTable;";

$result = $connection->query($getResult);

while($row = $result->fetch_assoc()){
    echo "<tr>";
    echo "<td>" . $row["matric"] . "</td>";
    echo "<td>" . $row["fullname"] . "</td>";
    echo "<td>" . $row["seng406"] . "</td>";
    echo "<td>" . $row["seng412"] . "</td>";
    echo "<td>" . $row["seng404"] . "</td>";
    echo "<td>" . $row["seng408"] . "</td>";
    echo "</tr>"
}

?>
</html>