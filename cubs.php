<?php

include 'models/BaseballStats.php';




// When Issue #2 is done, no code between here and END_REMOVE_FOR_2 should be in this file
// END_REMOVE_FOR_2
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

