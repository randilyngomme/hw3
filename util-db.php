<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'gommeouc_hw3user', 'sdZL5x,vdhW;', 'gommeouc_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
