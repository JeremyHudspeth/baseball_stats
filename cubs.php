<?php

include 'models/BaseballStats.php';

$connect = mysqli_connect("localhost", "root", "");
$result = mysqli_query($connect, "CREATE DATABASE cubs");
$db = mysqli_select_db($connect, "cubs");
define('CSV_PATH', 'C:/xampp/htdocs/baseball_stats/data_files/');
$csv_file = CSV_PATH . "cubs_2016_stats.csv";
$trunc = "TRUNCATE TABLE IF EXISTS Players";


if ($connect->query($sql) === TRUE){
    echo "New record created successfully";
} else {
    echo "Error" . $sql . "<br>" . $connect->error;
}
$sql = "CREATE TABLE Players";

if (($handle = fopen('cubs_2016_stats.csv', 'r')) !==FALSE) {
    while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $sql = "INSERT INTO Players(`Rk`,`Pos`,`Name`,`Age`,`G`,`PA`,`AB`,`R`,`H`,`2B`,`3B`,`HR`,`RBI`,`SB`,`CS`,`BB`,`SO`,`BA`,`OBP`,`SLG`,`OPS`,`OPS+`,`TB`,`GDP`,`HBP`,`SH`,`SF`,`IBB`) VALUES(
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
            
            echo \"</table>\";




?>
<!DOCTYPE html>
<html>
<head>

    <title>Chicago Cubs</title>
    <style>

        table,th,tr,td
        {
            border: 1px solid black;
        }

    </style>

</head>

<body>
    <table>
        <th>Rk</th><th>Pos</th><th>Name</th><th>Age</th><th>G</th><th>PA</th><th>AB</th><th>R</th><th>H</th><th>2B</th><th>3B</th><th>HR</th><th>RBI</th><th>HR</th><th>SB</th><th>CS</th><th>BB</th><th>SO</th><th>BA</th><th>OBP</th><th>SLG</th><th>OPS</th><th>OPS+</th><th>TB</th><th>GDP</th><th>HBP</th><th>SH</th><th>SF</th><th>IBB</th>
        <?php
            
           $baseballStats = new BaseballStats();

           $team_stats_array = $baseballStats->getTeamStats($connect);

            foreach($team_stats_array as $player_data_array) { ?>
                <tr>
                    <?php foreach($player_data_array as $column => $value) { ?>
                        <td><?php echo $value; ?></td>
                    <?php } ?>
                </tr>
        <?php } ?>
        </table>
    </body>
</html>