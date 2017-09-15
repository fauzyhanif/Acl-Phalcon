<section class="content animated fadeIn">
  <div class="row">

    <div class="col-md-12">
      <div class="box box-danger">
        <div class="box-header">
          <h1 class="box-title">Pembayaran</h1>
          <div class="box-tools pull-right">
            <a href="<?= $this->url->get('') ?>" class="btn bg-navy btn-flat btn-block">
              <i class="fa fa-edit"></i> 
            </a>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <form class="form-horizontal" id="pendaftaran" action="<?= $this->url->get('Pembayaran/bayar') ?>" method="POST" data-remote>
            <input type="hidden" value="<?= $data[0]->id ?>" class="form-control" name="nip">
            <input type="hidden" name="program_biaya_id" value="<?= $data[0]->program_biaya_id ?>">
            <input type="hidden" name="tuition_fee" value="<?= $data[0]->tuition_fee ?>">
            <input type="hidden" name="registration_fee" value="<?= $data[0]->registration_fee ?>">
            <div class="box-body">
              <div class="form-group" style="margin-bottom: 0px">
                <h4 class="col-sm-1"></h4>
                <h4 class="col-sm-2 ">Nama Peserta</h4>

                <div class="col-sm-8">
                  <h4>: <?= $data[0]->name ?></h4>
                </div>
              </div>

              <div class="form-group" style="margin-bottom: 0px">
                <h4 class="col-sm-1"></h4>
                <h4 class="col-sm-2 ">Nomor Peserta</h4>

                <div class="col-sm-8">
                  <h4>: <?= $data[0]->student_number ?></h4>
                </div>
              </div>

              <div class="form-group" style="margin-bottom: 0px">
                <h4 class="col-sm-1"></h4>
                <h4 class="col-sm-2 ">Biaya Pendaftaran</h4>

                <div class="col-sm-8">
                  <h4>: Rp. <?= number_format($data[0]->registration_fee,0,',','.'); ?> </h4>
                </div>
              </div>

              <div class="form-group" style="margin-bottom: 0px">
                <h4 class="col-sm-1"></h4>
                <h4 class="col-sm-2 ">Biaya Kursus</h4>

                <div class="col-sm-8">
                  <h4>: Rp. <?= number_format($data[0]->tuition_fee,0,',','.'); ?></h4>
                </div>
              </div>

              <div class="form-group" style="margin-bottom: 20px">
                <h4 class="col-sm-1"></h4>
                <h4 class="col-sm-2 ">Total Biaya</h4>

                <div class="col-sm-8">
                  <h4>: Rp. <?= number_format($data[0]->tuition_fee + $data[0]->registration_fee,0,',','.'); ?> </h4>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-2 ">Tahap</label>

                <div class="col-sm-8">
                  <select class="form-control" name="tahap">
                    <option value="">- Pilih Tahap -</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-2 ">Total Bayar</label>

                <div class="col-sm-8">
                  <input type="text" class="form-control" name="bayar">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-2 ">Guna Membayar</label>

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
          html:
          'Pembayaran Peserta Baru berhasil. <br>'+
          '<span>Klik tombol dibawah ini untuk melakukan print out</span>. <br>'+
          '<div class="text-center" style="padding-top:30px;">'+
            '<a href="Cetak-Pembayaran/'+response+'" class="btn btn-primary" style="width:100%;" target="_blank"> Print Out</a>'+
          '<div>',
        });
      }
    });
 
    e.preventDefault();
  });

})();
</script>