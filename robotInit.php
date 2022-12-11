<?php
    include_once './classes/robot.class.php';
      
    $robots = $db->allRobots();
    
    if(isset($_GET["robot"])){
        $robot=$robots[$_GET["robot"]];
    }else{
        $robot = $robots[2];
    }
    
// DESC, ACS
?>