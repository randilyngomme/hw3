<?php
function selectDLC() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT dlc_id,dlc_name,dlc_number FROM `DLC` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertDLC($dlcName,$dlcNumber) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `DLC` (`dlc_name`, `dlc_number`) VALUES (?, ?)");
        $stmt->bind_param("ss", $dlcName,$dlcNumber);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteDLC($dlcid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from DLC where dlc_id=?");
        $stmt->bind_param("i", $dlcid);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
