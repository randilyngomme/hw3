
<!-- sweetalert2 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.8.0/sweetalert2.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.8.0/sweetalert2.all.min.js"></script>


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
      if (insertPlayer($_POST['pName'], $_POST['pGender'])){
        echo '<div class="alert alert-success" role="alert">Player added!</div>';
   ?>
        <script>
        Swal.fire({ 
          title: "Success",
          text: "success",
          icon: "success",
          });
        </script>
        <?php
        
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
        break;
           case "Edit":
      if (updatePlayer($_POST['pName'], $_POST['pGender'], $_POST['pid'])){
        echo '<div class="alert alert-success" role="alert">Player edited!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
        break;
         case "Delete":
      if (deletePlayer($_POST['pid'])){
        echo '<div class="alert alert-success" role="alert">Player deleted!</div>';
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
