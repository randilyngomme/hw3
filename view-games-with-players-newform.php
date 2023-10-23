


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newGamesWithPlayersModal">
   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
      </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newGamesWithPlayersModal" tabindex="-1" aria-labelledby="newGamesWithPlayersModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newGamesWithPlayersModalLabel">New Profile</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form method ="post" action="">
           <div class="mb-3">
             <label for="gameid" class="form-label">game id</label>
             <input type="int" class="form-control" id="gameid" name="gameid">
            
           </div>
           <div class="mb-3">
             <label for="playerid" class="form-label">player id</label>
             <input type="int" class="form-control" id="playerid" name="playerid">
           </div>
          <div class="mb-3">
             <label for="platform" class="form-label">platform</label>
             <input type="text" class="form-control" id="platform" name="platform">
            
           </div>
           <div class="mb-3">
             <label for="device" class="form-label">device</label>
             <input type="text" class="form-control" id="device" name="device">
           </div>
           <div class="mb-3">
             <label for="genre" class="form-label">genre</label>
             <input type="text" class="form-control" id="genre" name="genre">
           </div>
         
           <button type="submit" class="btn btn-primary">Save</button>
         </form>
      </div>
    </div>
  </div>
</div>
