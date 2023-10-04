<h1>Player</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
       <th>ID</th>
    <th>Name</th>
    <th>Gender</th>
      <th></th>
    </tr>
  </thead>
    <tbody>
<?php
while($player = $player->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $player['player_id']; ?></td>
    <td><?php echo $player['player_name']; ?></td>
    <td><?php echo $player['player_gender']; ?></td>
    <td>
      <form method = "post" action ="profile-of-player.php">
  <input type="hidden" name="pid" value="<?php echo $player['player_id']; ?>">
        <button type="submit" class="btn btn-primary">Profile</button>
      </form>
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
