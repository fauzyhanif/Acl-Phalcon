<div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clear_form()">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Updated Sesi</h4>
      </div>

      <form name="jurusan" method="POST" data-remote="data-remote">
        <div class="modal-body">
          <div class="form-group">
            <label>Tahun Akademik</label>
            <input type="text" name="thn_akd" class="form-control">
          </div>

          <div class="form-group">
            <label>Nama Sesi</label>
            <input type="text" name="nama_sesi" class="form-control">
          </div>

          <div class="form-group">
            <label>Mulai Tanggal</label>
            <input type="text" name="tgl1" class="form-control">
          </div>

          <div class="form-group">
            <label>Berakhir Tanggal</label>
            <input type="text" name="tgl2" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="clear_form()">Close</button>
          <button type="submit" class="btn btn-primary">Save Update</button>
        </div>
      </form>

    </div>
  </div>
</div>