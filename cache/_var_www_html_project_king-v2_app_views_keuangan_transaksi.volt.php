<section class="content-header animated fadeIn">
  <h1>Form Pembayaran</h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-exchange"></i> Pembayaran</li>
    <li class="active">Form Pembayaran</li>
  </ol>
</section>
<section class="content animated fadeIn">
  <div class="row">

    <div class="col-md-12">
      <div class="box box-danger">
        <div class="box-header">
          <h1 class="box-title"></h1>
          <div class="box-tools pull-right">
            <a href="<?= $this->url->get('Pembayaran/list/') ?><?= $data[0]->a->student_number ?>" class="btn btn-primary btn-xs btn-flat">
              <i class="fa fa-chevron-circle-left"></i> Kembalik ke list pembayaran anda 
            </a>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <form class="form-horizontal" id="pendaftaran" action="<?= $this->url->get('Pembayaran/Transaksi/proses') ?>" method="POST" data-remote>
            <input type="hidden" value="<?= $data[0]->a->id ?>" name="id">
<!--             <input type="hidden" name="tuition_fee" value="<?= $data[0]->tuition_fee ?>">
            <input type="hidden" name="registration_fee" value="<?= $data[0]->registration_fee ?>"> -->
            <div class="box-body">
              <div class="form-group" style="margin-bottom: 0px">
                <h4 class="col-sm-1"></h4>
                <h4 class="col-sm-2 ">Nomora Peserta</h4>

                <div class="col-sm-3">
                  <h4>: <?= $data[0]->a->student_number ?></h4>
                </div>

                <div class="col-sm-2">
                  <h4>Tahap 1</h4>
                </div>

                <div class="col-sm-4">
                  <h4>: Rp. <?= number_format($data[0]->a->tahap_1,0,',','.') ?></h4>
                </div>

              </div>

              <div class="form-group" style="margin-bottom: 0px">
                <h4 class="col-sm-1"></h4>
                <h4 class="col-sm-2 ">Nama Peserta</h4>

                <div class="col-sm-3">
                  <h4>: <?= $data[0]->name ?></h4>
                </div>

                <div class="col-sm-2">
                  <h4>Tahap 2</h4>
                </div>

                <div class="col-sm-4">
                  <h4>: Rp. <?= number_format($data[0]->a->tahap_2,0,',','.') ?></h4>
                </div>
              </div>

              <div class="form-group" style="margin-bottom: 0px">
                <h4 class="col-sm-1"></h4>
                <h4 class="col-sm-2 ">Biaya Pendaftaran</h4>

                <div class="col-sm-3">
                  <h4>: Rp. <?= number_format($data[0]->a->registration_fee,0,',','.') ?></h4>
                </div>

                <div class="col-sm-2">
                  <h4>Tahap 3</h4>
                </div>

                <div class="col-sm-4">
                  <h4>: Rp. <?= number_format($data[0]->a->tahap_3,0,',','.') ?></h4>
                </div>

              </div>

              <div class="form-group" style="margin-bottom: 0px">
                <h4 class="col-sm-1"></h4>
                <h4 class="col-sm-2 ">Biaya Kursus</h4>

                <div class="col-sm-3">
                  <h4>: Rp. <?= number_format($data[0]->a->tuition_fee,0,',','.') ?></h4>
                </div>

                <div class="col-sm-2">
                  <h4>Total Dibayar</h4>
                </div>

                <div class="col-sm-4">
                  <h4>: Rp. <?= number_format($data[0]->a->total_dibayar,0,',','.') ?></h4>
                </div>
              </div>

              <div class="form-group" style="margin-bottom: 20px">
                <h4 class="col-sm-1"></h4>
                <h4 class="col-sm-2 ">Total Biaya</h4>

                <div class="col-sm-3">
                  <h4>: Rp. <?= number_format($data[0]->a->total_fee,0,',','.') ?></h4>
                </div>

                <div class="col-sm-2">
                  <h4>Sisa Tagihan</h4>
                </div>

                <div class="col-sm-4">
                  <h4>: Rp. <?= number_format($data[0]->a->sisa_tagihan,0,',','.') ?> </h4>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-2 ">Tahap</label>

                <div class="col-sm-8">
                  <select class="form-control" name="tahap">
                    <option value="">- Pilih Tahap -</option>
                     <?php if ($data[0]->a->tahap_1 == null) { ?>
                      <option value="1">1</option>
                      <?php } else { ?>
                      <option value="1" disabled="">1</option>
                      <?php } ?>

                      <?php if ($data[0]->a->tahap_2 == null) { ?>
                      <option value="2">2</option>
                      <?php } else { ?>
                      <option value="2" disabled="">2</option>
                      <?php } ?>

                      <?php if ($data[0]->a->tahap_3 == null) { ?>
                      <option value="3">3</option>
                      <?php } else { ?>
                      <option value="3" disabled="">3</option>
                      <?php } ?>
                    
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-2 ">Total Bayar</label>

                <div class="col-sm-8">
                  <input type="text" class="form-control 1" name="bayar">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-2 ">Guna membayar</label>

                <div class="col-sm-8">
                  <input type="text" class="form-control" name="keterangan">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1"></label>
                <button type="submit" class="btn btn-primary btn-flat col-sm-10">Submit</button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
</section>

<script type="text/javascript">
$(document).ready(function(){
  $(".1").mask("000.000.000", {reverse:true});
}); 
(function() {

  $('form[data-remote]').on('submit', function(e) {
    var form = $(this);
    var url = form.prop('action');

    $.ajax({
      type: 'POST',
      url: url,
      dataType:'json',
      data: form.serialize(),
      success: function(response){
      	swal({
          title: '<h2>Berhasil !</h2>',
          type: 'success',
          showConfirmButton:false,
          autoClose:false,
          html:
          'Pembayaran Peserta Baru berhasil. <br>'+
          '<span>Klik tombol dibawah ini untuk melakukan print out</span>. <br>'+
          '<div class="text-center" style="padding-top:30px;">'+
            '<a href="<?= $this->url->get('Cetak-kwitansi/') ?>'+response.kwitansi+'" class="btn btn-primary" style="width:100%;" target="_blank"> Cetakkwitansi</a>'+
          '<div>',
        });
      }
    });
 
    e.preventDefault();
  });

})();
</script>