<select class="form-select" id="player_id" name="player_id">
<?php 
while($playerItem= $playerList->fetch_assoc()){
  $selText="";
  if($selectedPlayer==$playerItem['player_id']){
    $selText=" selected";
  }
  ?>
   <option value="<?php echo $playerItem['player_id']; ?>"<?=$selText?>><?php echo $playerItem['player_name']; ?></option>
  <?php
}
?>
 
</select>
