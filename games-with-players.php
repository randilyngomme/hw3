<?php
require_once("util-db.php");
require_once("model-games-with-players.php");
  
$pageTitle ="games with players";
include "view-header.php";
if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertGamesWithPlayer($_POST['gameid'],$_POST['player_id'],$_POST['platform'],$_POST['device'],$_POST['genre'])) {
        echo '<div class="alert alert-success" role="alert"> Player profile added!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> ERROR!</div>';
      }
      break;
      case "Edit":
      if (updateGamesWithPlayer($_POST['game_id'],$_POST['player_id'],$_POST['platform'],$_POST['device'],$_POST['genre'],$_POST['gwpid'])) {
        echo '<div class="alert alert-success" role="alert"> Player profile edited!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> ERROR!</div>';
      }
               break;
               case "Delete":
      if (deleteGamesWithPlayer($_POST['gwpid'])) {
        echo '<div class="alert alert-success" role="alert"> Player profile deleted!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> ERROR!</div>';
      }
               break;            
  }
}

$Games = selectGames();
include "view-games-with-players.php";
include "view-footer.php";
?>
