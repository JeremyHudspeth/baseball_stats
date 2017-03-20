<?php
include "../models/jeremydbadapter.php";
/**
 * Author: Sean Dunagan (github: dunagan5887)
 * Date: 2/28/17
 */

/**
 * The code to create the Players database table with the data in the cubs_2016_stats.csv file should be move to this file
 */
$jeremydatabase = new jeremydbadapter();
$connect = mysqli_connect("localhost", "root", "");
$drop = mysqli_query($connect, "DROP DATABASE cubs");
$result = mysqli_query($connect, "CREATE DATABASE cubs");
$db = mysqli_select_db($connect, "cubs");
define("CSV_PATH", "./data_files/");
$csv_file = CSV_PATH . "cubs_2016_stats.csv";

$sql = "CREATE TABLE Players (
`Rk` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`Pos` VARCHAR(255), 
`Name` VARCHAR(255), 
`Age` VARCHAR(255),
`G` INT(6),
`PA` INT(6),
`AB` INT(6),
`R` INT(6),
`H` INT(6),
`2B` INT(6),
`3B` INT(6),
`HR` INT(6),
`RBI` INT(6),
`SB` INT(6),
`CS` INT(6),
`BB` INT(6),
`SO` INT(6),
`BA` INT(6),
`OBP` INT(6),
`SLG` INT(6),
`OPS` INT(6),
`OPS+` INT(6),
`TB` INT(6),
`GDP` INT(6),
`HBP` INT(6),
`SH` INT(6),
`SF` INT(6),
`IBB` INT(6))";

if ($connect->query($sql) === TRUE){
    echo "New record created successfully";
} else {
    echo "Error" . $sql . "<br>" . $connect->error;

}

$table = 'Players';
$columns = array('Rk','Pos','Name','Age','G','PA','AB','R','H','2B','3B','HR','RBI','SB','CS','BB','SO','BA','OBP','SLG','OPS','OPS+','TB','GDP','HBP','SH','SF','IBB');

    if (($handle = fopen("../data_files/cubs_2016_stats.csv", "r")) !== FALSE) {

        while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $firstEOA = $row[0];
            if ($firstEOA != "Rk"){

                $jeremydatabase->Insert_array($table, $columns, $row);



            }
        }
    };










