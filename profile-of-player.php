<?php
require_once("util-db.php");
require_once("model-profile-of-player.php");
  
$pageTitle ="Profile of player";
include "view-header.php";
$Games = selectProfileOfPlayer($_POST['pid']);
include "view-profile-of-player.php";
include "view-footer.php";
?>
