<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clear_form()">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="labelAcl">Edit Program dan Biaya</h4>
      </div>

      <form name="edit_program_biaya" method="POST" data-remote="data-remote">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Nama Program Studi</label>
                <select class="form-control" name="program_id">
                  <option>- Pilih Program Studi -</option>
                  <?php foreach ($data as $x) { ?>
                    <option value="<?= $x->id ?>"><?= $x->nm_program_studi ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label>Biaya Lunas di Depan</label>
                <input type="text" name="biaya_kursus" class="form-control 1">
              </div>

              <div class="form-group">
                <label>Total Biaya Angsuran</label>
                <input type="text" name="biaya_kursus_angsuran" class="form-control 1">
              </div>

              <div class="form-group">
                <label>Angsuran 1</label>
                <input type="text" name="angsuran_1" class="form-control 1">
              </div>

              <div class="form-group">
                <label>Angsuran 2</label>
                <input type="text" name="angsuran_2" class="form-control 1">
              </div>

            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="clear_form()">Close</button>
          <button type="submit" class="btn btn-success">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>