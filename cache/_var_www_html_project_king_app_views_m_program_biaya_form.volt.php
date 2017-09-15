<div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clear_form()">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="labelAcl">Input Program Studi</h4>
      </div>

      <form name="program_biaya" action="<?= $this->url->get('Program-biaya/input') ?>" method="POST" data-remote="data-remote">
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
                <label>Level</label>
                <select class="form-control" name="level">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>

              <div class="form-group">
                <label>Biaya Pendaftaran</label>
                <input type="text" name="biaya_pendaftaran" class="form-control">
              </div>

              <div class="form-group">
                <label>Biaya Kursus</label>
                <input type="text" name="biaya_kursus" class="form-control">
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