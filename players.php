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
      if (InsertPlayer($_POST['pName'], $_POST['pGender'])){
        echo '<div class="alert alert-success" role="alert">Player added!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
        break;
    }
}

  
$Players = selectPlayer();
include "view-player.php";
include "view-footer.php";
?>
