<?php
function selectPlayer() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT player_id,player_name,player_gender FROM `player` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertPlayer($pName,$pGender) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `player` (`player_name`, `player_gender`) VALUES (?, ?)");
        $stmt->bind_param("ss", $pName,$pGender);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updatePlayer($pName,$pGender,$pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `player` set `player_name` = ?, `player_gender` = ? where player_id=?");
        $stmt->bind_param("ssi", $pName,$pGender,$pid);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deletePlayer($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from player where player_id=?");
        $stmt->bind_param("i", $pid);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>


