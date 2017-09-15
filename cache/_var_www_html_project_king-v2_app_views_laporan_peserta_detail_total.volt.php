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
  <h1>Laporan peserta berdasarkan status</h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-money"></i> Laporan peserta</li>
    <li class="active">Laporan peserta berdasarkan status</li>
  </ol>
</section>

<section class="content">
  <div class="box">

    <div class="row">
      <div class="col-xs-12">

        <!-- /.box-header -->
        <div class="box-header">
          <table>
            <tr>
              <td>Term</td>
              <td>: <?= $term ?></td>
            </tr>
            <tr>
              <td>Years</td>
              <td>: <?= $years ?></td>
            </tr>
            <tr>
              <td>Status</td>
              <td>: <?= $status ?></td>
            </tr>
          </table>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th width="30">No.</th>
                <th width="70">Action</th>
                <th width="120">Student Number</th>
                <th>Name</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($data as $x) { ?>
              <tr>
                <td><?= $no ?>.</td>
                <td>
                  <?php if ($x->student_number == '0000000'){ ?>
                    <a href="<?= $this->url->get('Peserta/Profil/') ?><?= $x->student_number ?>" disabled class="btn btn-xs btn-primary btn-flat">
                      <i class="fa fa-user"></i>
                      Detail
                    </a>
                  <?php } else { ?>
                  <a href="<?= $this->url->get('Peserta/Profil/') ?><?= $x->student_number ?>" class="btn btn-xs btn-primary btn-flat">
                    <i class="fa fa-user"></i>
                    Detail
                  </a>
                  <?php } ?>
                  </button>
                </td>
                <td><?= $x->student_number ?></td>
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