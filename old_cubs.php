<?php

$connect = mysqli_connect("localhost", "root", "");
$result = mysqli_query($connect, "CREATE DATABASE cubs");
$db = mysqli_select_db($connect, "cubs");
define('CSV_PATH', 'C:/xampp/htdocs/baseball-stats/data_files/');
$csv_file = CSV_PATH . "cubs_2016_stats.csv";
$drop = "DROP TABLE IF EXISTS Players";
$sql = "CREATE TABLE Players (
Rk INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Pos VARCHAR(50),
Name VARCHAR(30) NOT NULL,
Age VARCHAR(30) NOT NULL,
G INT(6),
PA INT(6),
AB INT(6),
R INT(6),
H INT(6),
2B INT(6),
3B INT(6),
HR INT(6),
RBI INT(6),
SB INT(6),
CS INT(6),
BB INT(6),
SO INT(6),
BA INT(6),
OBP INT(6),
SLG INT(6),
OPS INT(6),
`OPS+` INT(6),
TB INT(6),
GDP INT(6),
HBP INT(6),
SH INT(6),
SF INT(6),
IBB INT(6)
)";
if ($connect->query($sql) === TRUE) {

} else {
    echo "Error creating table: " . $connect->error;
}


if (($handle = fopen($csv_file, 'r')) !==FALSE) {
    while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $sql = "INSERT INTO `Players`(`Rk`,`Pos`,`Name`,`Age`,`G`,`PA`,`AB`,`R`,`H`,`2B`,`3B`,`HR`,`RBI`,`SB`,`CS`,`BB`,`SO`,`BA`,`OBP`,`SLG`,`OPS`,`OPS+`,`TB`,`GDP`,`HBP`,`SH`,`SF`,`IBB`)VALUES(
                '" . $row[0] . "',
                '" . $row[1] . "',
                '" . $row[2] . "',
                '" . $row[3] . "',
                '" . $row[4] . "',
                '" . $row[5] . "',
                '" . $row[6] . "',
                '" . $row[7] . "',
                '" . $row[8] . "',
                '" . $row[9] . "',
                '" . $row[10] . "',
                '" . $row[11] . "',
                '" . $row[12] . "',
                '" . $row[13] . "',
                '" . $row[14] . "',
                '" . $row[15] . "',
                '" . $row[16] . "',
                '" . $row[17] . "',
                '" . $row[18] . "',
                '" . $row[19] . "',
                '" . $row[20] . "',
                '" . $row[21] . "',
                '" . $row[22] . "',
                '" . $row[23] . "',
                '" . $row[24] . "',
                '" . $row[25] . "',
                '" . $row[26] . "',
                '" . $row[27] . "'
)";

        if ($connect->query($sql) === TRUE) {

        } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }}}


$select = "SELECT * FROM Players";
if ($result = mysqli_query($connect, $select)){

    echo "<table>";
    echo "<th>Rk</th>","<th>Pos</th>","<th>Name</th>","<th>Age</th>","<th>G</th>","<th>PA</th>","<th>AB</th>","<th>R</th>","<th>H</th>","<th>2B</th>","<th>3B</th>","<th>HR</th>","<th>RBI</th>","<th>HR</th>","<th>SB</th>","<th>CS</th>","<th>BB</th>","<th>SO</th>","<th>BA</th>","<th>OBP</th>","<th>SLG</th>","<th>OPS</th>","<th>OPS+</th>","<th>TB</th>","<th>GDP</th>","<th>HBP</th>","<th>SH</th>","<th>SF</th>","<th>IBB</th>";
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
