<?php
require_once("util-db.php");
require_once("model-player-of-game.php");
  
$pageTitle ="player of game";
include "view-header.php";
$PlayerOfGame = selectPlayerOfGame($_GET['id']);
include "view-player-of-game.php";
include "view-footer.php";
?>
