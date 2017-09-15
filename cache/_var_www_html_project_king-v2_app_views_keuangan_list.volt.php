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
  <h1>List Pembayaran</h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-money"></i> Pembayaran</li>
    <li class="active">List Pembayaran</li>
  </ol>
</section>

<section class="content animated fadeIn">
  <div class="row">

    <div class="col-md-12">
      <div class="box box-danger">
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width: 5%">No.</th>
                    <th class="text-center" style="width: 10%">Action</th>
                    <th class="text-center" style="width: 40%">Nama Program</th>
                    <th class="text-center" style="width: 10%">Level</th>
                    <th class="text-center" style="width: 15%">Sisa Tagihan</th>
                    <th class="text-center" style="width: 20%">Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($data as $x) { ?>
                  <tr>
                    <td><?= $no ?>.</td>
                    <td class="text-center">
                      <?php if ($x->sisa_tagihan == 0){ ?>
                        <a href="<?= $this->url->get('Pembayaran/Transaksi/') ?><?= $x->id ?>" class="btn btn-primary btn-xs btn-flat disabled"><i class="fa fa-fw fa-exchange"></i> Transaksi</a>
                      <?php } else { ?>
                        <a href="<?= $this->url->get('Pembayaran/Transaksi/') ?><?= $x->id ?>" class="btn btn-primary btn-xs btn-flat"><i class="fa fa-fw fa-exchange"></i> Transaksi</a>
                      <?php } ?>
                    </td>
                    <td><?= $x->nm_program_studi ?></td>
                    <td><?= $x->level ?></td>
                    <td><?= number_format($x->sisa_tagihan,0,',','.') ?></td>
                    <td>
                      <?php if ($x->sisa_tagihan > 0){ ?>
                        BELUM LUNAS
                      <?php } else { ?>
                       LUNAS
                      <?php }  ?>
                    </td>
                  </tr>
                  <?php $no = $no + 1; ?>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


