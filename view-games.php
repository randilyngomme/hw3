<h1>Games</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
       <th>ID</th>
    <th>Name</th>
    <th>Office</th>
    </tr>
  </thead>
    <tbody>
<?php
while($game = $games->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $game['game_id']; ?></td>
    <td><?php echo $game['game_name']; ?></td>
    <td><?php echo $game['game_number']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
