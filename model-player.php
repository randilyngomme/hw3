<?php
function selectPlayer() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT player_id,player_name,player_number FROM `player` ");
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
