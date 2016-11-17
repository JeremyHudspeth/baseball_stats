<?php

// php populate html table from mysql database

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "csv_db";
$connect = mysqli_connect("localhost", "root", '', "csv_db");
mysqli_select_db("csv_db");

$mysqli_free_result = "SELECT * FROM 'tbl_name'";

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
    printf("Rk: %sName:%s", $row["rk"], $row["name"]);
}

mysqli_free_result($result);

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

<!-- Table One -->
<table style="background-color: red;">

    <tr>
        <th>Rk</th>
        <th>Pos</th>
        <th>Name</th>
        <th>Age</th>
    </tr>

    <?php while($row = mysqli_fetch_array($result)):;?>
        <tr>
            <td><?php echo $row[0];?></td>
            <td><?php echo $row[1];?></td>
            <td><?php echo $row[2];?></td>
            <td><?php echo $row[3];?></td>
        </tr>
    <?php endwhile;?>

</table>


</body>

</html>



