<select class="form-select" id="gameid" name="gameid">
<?php 
while($gameItem= $gameList->fetch_assoc()){
  $selText="";
  if($selectedGames==$gameItem['game_id']){
    $selText="selected";
  }
  ?>
   <option value="<?php echo $gameItem['game_id'];?>"<?=$selText?> ><?php echo $gameItem['game_name'];?></option>
  <?php
}
?>
 
</select>
