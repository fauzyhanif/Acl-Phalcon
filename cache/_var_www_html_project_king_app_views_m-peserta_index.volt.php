<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <!-- /.box -->

      <div class="box">
        <div class="box-header">
          <h1 class="box-title">List Pendaftaran</h1>
          <div class="box-tools pull-right">
            <a href="<?= $this->url->get('Pendaftaran') ?>" class="btn bg-navy btn-flat btn-block">
              <i class="fa fa-edit"></i> Form Pendaftaran
            </a>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th width="30">No.</th>
                <th width="70">Action</th>
                <th>Nama</th>
                <th>Program</th>
                <th>Level</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($data as $x) { ?>
              <tr>
                <td><?= $no ?>.</td>
                <td>
                  <button class="btn btn-info btn-flat"  id="buttonCrudGroupMenu">
                    <i class="fa fa-info-circle cursor iconCrud"></i>
                  </button>
                  <a href="Peserta/Edit/<?= $x->id ?>" class="btn btn-primary btn-flat"  id="buttonCrudGroupMenu">
                    <i class="fa fa-edit cursor iconCrud"></i>
                  </a>
                  <button class="btn btn-danger btn-flat"  id="buttonCrudGroupMenu">
                    <i class="fa fa-trash cursor iconCrud"></i>
                  </button>
                </td>
                <td><?= $x->name ?></td>
                <td><?= $x->program_id ?></td>
                <td><?= $x->level_active ?></td>
              </tr>
              <?php $no = $no + 1; ?>
              <?php } ?>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>



<script>
  $(function () {
    $('#example1').DataTable({
      "ordering": false,
    });
  });
</script>