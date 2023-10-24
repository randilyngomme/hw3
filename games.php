<?php
require_once("util-db.php");
require_once("model-games.php");
  
$pageTitle ="games";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add";
    if(insertGames($_POST['gName'],$_POST['gNumber'])){
      echo '<div class="alert alert-success" role="alert">Game Added!</div>';
    } else{
       echo '<div class="alert alert-danger" role="alert">ERROR!</div>';
    }
      break;
        case "Delete";
    if(deleteGames($_POST['gid']){
      echo '<div class="alert alert-success" role="alert">Game Deleted!</div>';
    } else{
       echo '<div class="alert alert-danger" role="alert">ERROR!</div>';
    }
      break;
  }
}

$Games = selectGames();
include "view-games.php";
include "view-footer.php";
?>
