<select class="form-select" id="player_id" name="player_id">
<?php 
while($playerItem= $playerList->fetch_assoc()){
  ?>
   <option value="<?php echo $playerItem['player_id']; ?>"><?php echo $playerItem['player_id']; ?></option>
  <?php
}
?>
 
</select>
