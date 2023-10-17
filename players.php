<?php
require_once("util-db.php");
require_once("model-player.php");
  
$pageTitle ="player";
include "view-header.php";

if (isset($_POST['actionType']))
{
  switch($_POST['actionType'])
    {
      case "Add":
      InsertPlayer{$_POST['pName'], $_POST['pGender']}
        break;
    }
}

  
$Players = selectPlayer();
include "view-player.php";
include "view-footer.php";
?>
