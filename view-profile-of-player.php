<h1>Profile of player</h1>
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
while($profile = $profile->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $profile['player_id']; ?></td>
    <td><?php echo $profile['player_name']; ?></td>
    <td><?php echo $profile['player_gender']; ?></td>
    <td><?php echo $profile['platform']; ?></td>
    <td><?php echo $profile['device']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
