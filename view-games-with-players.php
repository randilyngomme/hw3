
<div class="row">
   <div class="col">
      <h1>Games with players</h1>
   </div>
   <div class="col-auto"> 
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
      </svg>
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
