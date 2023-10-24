

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newDlcModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="newDlcModal" tabindex="-1" aria-labelledby="newDlcModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newDlcModalLabel">New DLC</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
            <div class="mb-3">
              <label for="dlcName" class="form-label">DLC Name</label>
              <input type="text" class="form-control" id="dlcName" name="dlcName">
            </div>
               <div class="mb-3">
              <label for="dlcNumber" class="form-label">DLC Number</label>
              <input type="text" class="form-control" id="dlcNumber" name="dlcNumber">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
      </div>
    </div>
  </div>
</div>
