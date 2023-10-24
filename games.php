<?php
require_once("util-db.php");
require_once("model-games.php");
  
$pageTitle ="games";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add";
    insertGames($_POST['gName'],$_POST['gNumber']);
      break;
  }
}

$Games = selectGames();
include "view-games.php";
include "view-footer.php";
?>
