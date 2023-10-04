<?php
require_once("util-db.php");
require_once("model-games-with-players.php");
  
$pageTitle ="games with players";
include "view-header.php";
$Games = selectGames();
include "view-games-with-players.php";
include "view-footer.php";
?>
