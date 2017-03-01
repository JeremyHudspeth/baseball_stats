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
     * This method needs to return an array of the following form:
     * array(
     *      0 => array(
     *          'Rk' => 1,
     *          'Pos' => 'C',
     *          'Name' => 'I'm a gay Cubs catcher lulz',
     *          ...
     *          ...
 *              ...
     *      ),
     *      1 => array(
     *          'Rk' => 2,
     *          'Pos' => '1B',
     *          'Name' => 'My name is Jizzer, but with an R instead of a J and an o instead of er'
     *          ...
     *          ...
     *          ...
     *      )
     *      ...
     *      ...
     *      ...
     * )
     *
     * @return array
     */
    public function getTeamStats($connect)
    {
        // Implement the code here
        // You may want to use mysqli_fetch_assoc here
        $select = "SELECT * FROM Players";
        if ($result = mysqli_query($connect, $select)){
      $cubs_team_stats = array ();

           while ($row = mysqli_fetch_assoc($result))  {
               ($cubs_team_stats[] = $row);

           }return $cubs_team_stats;
}}}
