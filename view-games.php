<div class=row">
  <div class="col">
    <h1>Games</h1>
    </div> 
  <div class="col-auto">
     <?php
include "view-games-newform.php";
      ?>
  </div>
</div>

<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
       <th>ID</th>
    <th>Name</th>
    <th>Number</th>
      <th></th>
      <th></th>
      <th></th>
    </tr>
  </thead>
    <tbody>
<?php
while($game = $Games->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $game['game_id']; ?></td>
    <td><?php echo $game['game_name']; ?></td>
    <td><?php echo $game['game_number']; ?></td>
    <td><a href="player-of-game.php?id=<?php echo $game['game_id']; ?>">Player</a</td>
    
    <td>
      
    </td>

    <td>
      
    </td>
    
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
