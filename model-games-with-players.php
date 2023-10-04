<?php
function selectGames() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT game_id,game_name,game_number FROM `game` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function selectPlayerOfGame($gid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT p.player_id,player_name,player_gender,platform,device FROM `player` p join profile pf on pf.player_id= pf.player_id WHERE pf.game_id=? ");
        $stmt->bind_param("i", $gid);
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

