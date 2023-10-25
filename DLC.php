<?php
require_once("util-db.php");
require_once("model-DLC.php");
  
$pageTitle ="DLC";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add";
    if(insertDLC($_POST['dlcName'],$_POST['dlcNumber'])){
      echo '<div class="alert alert-success" role="alert">DLC Added!</div>';
    } else{
       echo '<div class="alert alert-danger" role="alert">ERROR!</div>';
    }
      break;
    
    case "Edit";
    if(updateDLC($_POST['dlcName'],$_POST['dlcNumber'],$_POST['dlcid'])){
      echo '<div class="alert alert-success" role="alert">Game Edited!</div>';
    } else{
       echo '<div class="alert alert-danger" role="alert">ERROR!</div>';
    }
      break;

   case "Delete":
      if (deleteDLC($_POST['dlcid'])){
        echo '<div class="alert alert-success" role="alert">DLC deleted!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
        break;

    <p>
      Hello
      </p>
    }
}

$DLC = selectDLC();
include "view-DLC.php";
include "view-footer.php";
?>
