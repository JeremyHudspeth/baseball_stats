<?php
/**
 * Author: Sean Dunagan (github: dunagan5887)
 * Date: 2/20/17
 */

/**
 * Class BaseballStats
 */
class BaseballStats
{
    /**
     * This method should return a nested array containing the stats for all of the cubs players.
     * To clarify if $cubs_team_stats = $baseballStatsModelObject->getTeamStats(), then $cubs_team_stats should be an
     * array. Every index of $cubs_team_stats should point to an array (an array which contains the stats for a player)
     *
     * @return array
     */
    public function getTeamStats($connect)
    {
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
}}} ?>