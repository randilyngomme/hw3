<div>
<canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php
require_once("util-db.php");
require_once("model-player.php");
  
$pageTitle ="player";
include "view-header.php";
?>
<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    width:30,
    data: {
    datasets: [{
        data: [30, 40, 30]
    }],
 
    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
        'Red',
        'Yellow',
        'Blue'
],
      options: {
    cutoutPercentage: 50, 
  }
    }
  });
</script>
<?php
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
