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
function selectGameWithPlayer($gid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT p.player_id,player_name,player_gender,platform,device,profile_id FROM player p join profile pf on pf.player_id= p.player_id WHERE pf.game_id=?");
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

    function insertGamesWithPlayer($gid,$pid,$platform,$device,$genre) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `profile` (`game_id`, `player_id`,`platform`,`device`,`genre`) VALUES (?, ?,?,?,?)");
        $stmt->bind_param("iisss", $gid,$pid,$platform,$device,$genre);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteGamesWithPlayer($gwpid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from profile where profile_id=?");
        $stmt->bind_param("i", $gwpid);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

 



?>

