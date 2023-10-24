<div class="row">
  <div class="col">
    <h1>DLC</h1>
  </div>
  <div class="col-auto">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
    </svg>
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
