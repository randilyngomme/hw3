<?php
require_once("util-db.php");
require_once("model-DLC.php");
  
$pageTitle ="DLC";
include "view-header.php";
$DLC = selectDLC();
include "view-DLC.php";
include "view-footer.php";
?>
