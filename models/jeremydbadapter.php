<?php

/**
 * Created by PhpStorm.
 * User: jeremy
 * Date: 3/19/2017
 * Time: 5:38 PM
 */


class jeremydbadapter
{
    function Insert_array($table, $columns, $values)
    {
        $connect = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connect, "cubs");
        $csv_file = CSV_PATH . "cubs_2016_stats.csv";
        foreach($columns as &$column){
            $column = "`" . $column . "`";
        }
        foreach($values as &$value){
            $value = "'" . $value . "'";

        }
        $implodedcol = implode(",", $columns);
        $implodedvalues = implode(",", $values);
        $insertquery = "INSERT INTO $table($implodedcol) VALUES ($implodedvalues)";
        if ($connect->query($insertquery) === TRUE) {
            echo "New records inserted successfully";
        } else {
            $error = $connect->error;
            echo "Error" . $insertquery . "<br>" . $connect->error;
        }
    }
}




