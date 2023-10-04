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
while($dlc = $DLC->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $dlc['dlc_id']; ?></td>
    <td><?php echo $dlc['dlc_name']; ?></td>
    <td><?php echo $dlc['dlc_number']; ?></td>
    
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
