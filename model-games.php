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
?>
