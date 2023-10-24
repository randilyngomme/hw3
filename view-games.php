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
      <form method = "post" action ="">
  <input type="hidden" name="gid" value="<?php echo $game['game_id']; ?>">
           <input type="hidden" name="actionType" value="Delete">
        <button type="submit" class="btn btn-primary" onClick="return confirm('are you sure you wanna do that? o-O');">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
              <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
            </svg>
        </button>
      </form>
    </td>
    
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
