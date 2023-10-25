<div class="row">
   <div class="col">
      <h1>Games with players</h1>
   </div>
   <div class="col-auto"> 
<?php
include "view-games-with-players-newform.php";
?>
   </div>
</div>

<div class="card-group">
<?php
while($game = $Games->fetch_assoc()) {
?>
   <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $game['game_name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
<?php
        $Players= selectGameWithPlayer($game['game_id']);
        while($player=$Players->fetch_assoc()){
          ?>
             <li class="list-group-item"><?php echo $player['player_name']; ?>-<?php echo $player['player_gender']; ?> -<?php echo $player['platform']; ?>- <?php echo $player['device']; ?></li>
          <?php
        }
?>
        </ul>
        </p>
      <p class="card-text"><small class="text-body-secondary">Number:<?php echo $game['game_number']; ?> </small></p>
    </div>
  </div>
<?php
}
?>
  </div>
