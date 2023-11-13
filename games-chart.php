<?php
require_once("util-db.php");
require_once("model-games-chart-db.php");
  
$pageTitle ="games chart";
include "view-header.php";
$Games = selectGames();
include "view-games-chart/page.php";
include "view-footer.php";
?>
