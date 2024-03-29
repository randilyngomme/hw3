<?php
function selectProfileOfPlayer($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT p.player_id,player_name,player_gender,platform,device FROM `player` p join profile pf on p.player_id= pf.player_id WHERE pf.player_id=? ");
        $stmt->bind_param("i", $pid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
