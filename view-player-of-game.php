<h1>Player of game</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
       <th>ID</th>
    <th>Name</th>
    <th>Gender</th>
      <th>platform</th>
      <th>device</th>
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
    <td><?php echo $player['platform']; ?></td>
    <td><?php echo $player['device']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
