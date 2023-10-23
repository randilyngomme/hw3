<?php
require_once("util-db.php");
require_once("model-games-with-players.php");
  
$pageTitle ="games with players";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      insertGamesWithPlayer($_POST['gameid'],$_POST['playerid'],$_POST['platform'],$_POST['device'],$_POST['genre']);
                            break;
  }
}


$Games = selectGames();
include "view-games-with-players.php";
include "view-footer.php";
?>
