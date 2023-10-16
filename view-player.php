<div class="row">
  <div class ="col">
    <h1>Players</h1>
  </div>
    <div class="col-auto">
<?php
include "view-player-newform.php";
?>
    </div>
</div>

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
while($player = $Players->fetch_assoc()) {
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
