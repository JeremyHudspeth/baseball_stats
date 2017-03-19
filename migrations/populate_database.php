<?php

/**
 * Author: Sean Dunagan (github: dunagan5887)
 * Date: 2/28/17
 */

/**
 * The code to create the Players database table with the data in the cubs_2016_stats.csv file should be move to this file
 */

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



if (($handle = fopen("../data_files/cubs_2016_stats.csv", "r")) !== FALSE) {
    while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {

        $insert = ("INSERT INTO Players (`Rk`, `Pos`, `Name`, `Age`, `G`, `PA`, `AB`, `R`, `H`, `2B`, `3B`, `HR`, `RBI`, `SB`, `CS`, `BB`, `SO`, `BA`, `OBP`, `SLG`, `OPS`, `OPS+`, `TB`, `GDP`, `HBP`, `SH`, `SF`, `IBB`) VALUES(
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
            '" . $row[27] . "')")
        ;
        if ($connect->query($insert) === TRUE) {
            echo "New records inserted successfully";
        } else {
            echo "Error" . $insert . "<br>" . $connect->error;
        }}};










