<h1>DLC</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
       <th>ID</th>
    <th>Name</th>
    <th>Number</th>
      <th></th>
    </tr>
  </thead>
    <tbody>
<?php
while($game = $DLC->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $DLC['dlc_id']; ?></td>
    <td><?php echo $DLC['dlc_name']; ?></td>
    <td><?php echo $DLC['dlc_number']; ?></td>
    <td><a href="player-of-game.php?id=<?php echo $game['game_id']; ?>">Player</a</td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
