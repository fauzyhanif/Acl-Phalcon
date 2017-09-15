<style type="text/css">
#formDaftar{
  padding: 5px 10px;
  background-color: #F7CA18;
  font-size: 16px;
}

#formDaftar a{
  color: black;
}

thead{
  background-color: #F7CA18;
  }
</style>
<section class="content-header animated fadeIn">
  <h1>Data Pendaftar</h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-edit"></i> Pendaftaran</li>
    <li class="active">Data Pendaftar</li>
  </ol>
</section>

<section class="content">
  <div class="box">

    <div class="row">
      <div class="col-xs-12">

        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th width="30">No.</th>
                <th width="70">Action</th>
                <th width="120">No Pendaftaran</th>
                <th>nama</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($data as $x) { ?>
              <tr>
                <td><?= $no ?>.</td>
                <td>
                  <a href="Cetak-formulir/<?= $x->id ?>" class="btn btn-xs btn-primary btn-flat" target="_blank">
                    <i class="fa fa-print"></i>
                    Print Formulir
                  </a>
                  </button>
                </td>
                <td><?= $x->id ?></td>
                <td><?= $x->name ?></td>
              </tr>
              <?php $no = $no + 1; ?>
              <?php } ?>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
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