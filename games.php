<?php
require_once("util-db.php");
require_once("model-games.php")
  
$pageTitle="game";
include "view-header.php";
$Games = selectGames();
include "view-games.php";
include "view-footer.php";
?>
