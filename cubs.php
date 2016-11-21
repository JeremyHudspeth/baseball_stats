<?php

// php populate html table from mysql database

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "csv_db";
$connect = mysqli_connect("localhost", "root", '', "csv_db");
$query = "SELECT * FROM tbl_name";
if ($result = mysqli_query($connect,$query)){

    echo "<table>";

    //data
    while ($row = mysqli_fetch_array($result))  {
        echo "<tr><td>{$row[0]}</td>";
        echo "<td>{$row[1]}</td>";
        echo "<td>{$row[2]}</td>";
        echo "<td>{$row[3]}</td>";
        echo "<td>{$row[4]}</td>";
        echo "<td>{$row[5]}</td>";
        echo "<td>{$row[6]}</td>";
        echo "<td>{$row[7]}</td>";
        echo "<td>{$row[8]}</td>";
        echo "<td>{$row[9]}</td>";
        echo "<td>{$row[10]}</td>";
        echo "<td>{$row[11]}</td>";
        echo "<td>{$row[12]}</td>";
        echo "<td>{$row[13]}</td>";
        echo "<td>{$row[14]}</td>";
        echo "<td>{$row[15]}</td>";
        echo "<td>{$row[16]}</td>";
        echo "<td>{$row[17]}</td>";
        echo "<td>{$row[18]}</td>";
        echo "<td>{$row[19]}</td>";
        echo "<td>{$row[20]}</td>";
        echo "<td>{$row[21]}</td>";
        echo "<td>{$row[22]}</td>";
        echo "<td>{$row[23]}</td>";
        echo "<td>{$row[24]}</td>";
        echo "<td>{$row[25]}</td>";
        echo "<td>{$row[26]}</td>";
        echo "<td>{$row[27]}</td></tr>";
    }

    echo "</table>";
}

mysqli_free_result($result);
mysqli_close($connect);


?>

<!DOCTYPE html>

<html>

<head>

    <title>Chicago Cubs</title>

    <meta charset="UTF-8">



    <style>

        table,th,tr,td
        {
            border: 1px solid black;
        }

    </style>

</head>

<body>



</body>

</html>



