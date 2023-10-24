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
function insertGames($gName,$gNumber) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `game` (`game_name`, `game_number`) VALUES (?, ?)");
        $stmt->bind_param("ss", $gName,$gNumber);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
