<?php
function selectDLC() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT dlc_id,dlc_name,dlc_number FROM `dlc` ");
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
