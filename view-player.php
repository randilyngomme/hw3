!-- Animation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>

   <!-- button to rotate square  -->
   <td>
  <div class="rotate-square"></div>
  <button id="btnturn" type="hidden" class="btn btn-danger" onClick="rotateSquare(); ">
    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
      <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
      <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
    </svg>
  </button>
</td>


    

<style>
  .rotate-square {
    width: 1000px;
    height: 20px;
    background-color: purple;
    transition: transform 0.5s ease-in-out;
    margin-top:100px;
    margin-bottom:25px;
  }

  .rotate-square.rotate {
    transform: rotate(360deg);
  }
</style>

 
 


<script>
  function rotateSquare() {
    var square = document.querySelector('.rotate-square');
    square.classList.toggle('rotate');
  }
</script>








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
      <th></th>
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
      <?php
    include "view-player-editform.php";
      ?>
    </td>






    


    
    <td>
         <form method = "post" action ="">
  <input type="hidden" name="pid" value="<?php echo $player['player_id']; ?>">
           <input type="hidden" name="actionType" value="Delete">
        <button type="submit" class="btn btn-primary" onClick="return confirm('are you sure you wanna do that? o-O');">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
              <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
            </svg>
        </button>
      </form>
    </td>
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
