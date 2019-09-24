<div class="modal fade" tabindex="-1" role="dialog" id="modal-add-status">
  <div class="modal-dialog" role="document">
    {{-- Form Submit Status --}}
    <form action="">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Status</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">

            {{-- Input Status --}}
            <textarea placeholder="Tulis status Anda disini..." class="form-control" name="status" id="status" cols="30" rows="10"></textarea>
            {{-- End Input Status --}}
            
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary">Tambah</button>
        </div>
      </div>
    </form>
  {{-- End Form Submit Status --}}
  </div>
</div>