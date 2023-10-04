<?php
require_once("util-db.php");
require_once("model-player-of-game.php");
  
$pageTitle ="player of game";
include "view-header.php";
$Games = selectPlayerOfGame($_GET['id']);
include "view-player-of-game.php";
include "view-footer.php";
?>
