<script type="text/javascript">
// save-edit-delete
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
          $('#pendaftaran').trigger("reset");
          $('#status').val('PESERTA');
		  $('#form2').html('');
		  $('#form3').html('');
		  $('#persetujuan').html('<h1 class="text-center">Ingin melanjutkan ke Pembayaran ?</h1>'+
		                          '<div class="text-center">'+
		                          '<a class="btn btn-flat btn-danger" style="width: 200px" onclick="hidePersetujuan()">Tidak</a> '+
		                          '<a class="btn btn-flat btn-success" style="width: 200px" onclick="form2()">Ya</a>'+
		                          '</div>');
		  $('.box-footer').html('');
          if (response.kwitansi) {
            swal({
              title: '<h2>Berhasil !</h2>',
              type: 'success',
              showConfirmButton:false,
              autoClose:false,
              html:
              'Pendaftaran Peserta berhasil. <br>'+
              '<div class="text-center" style="padding-top:30px;">'+
                '<a href="<?= $this->url->get('Cetak-formulir') ?>/'+response.peserta+'" class="btn btn-primary" target="_blank" style="width:100%;"> Cetak Formulir Pendaftaran</a><br>'+
              '<div>'+
              '<div class="text-center" style="padding-top:15px;">'+
                '<a href="<?= $this->url->get('Cetak-kwitansi') ?>/'+response.kwitansi+'" class="btn btn-primary" target="_blank" style="width:100%;"> Cetak Kwitansi</a><br>'+
              '<div>'+
              '<div class="text-center" style="padding-top:15px;">'+
                '<a href="<?= $this->url->get('Cetak-biodata-peserta') ?>/'+response.peserta+'" class="btn btn-primary" target="_blank" style="width:100%;"> Cetak Biodata Peserta Pendaftaran</a><br>'+
              '<div>',
            });
          } else {
            swal({
              title: '<h2>Berhasil !</h2>',
              type: 'success',
              showConfirmButton:false,
              html:
              'Pendaftaran Peserta berhasil. <br>'+
              '<div class="text-center" style="padding-top:30px;">'+
                '<a href="<?= $this->url->get('Cetak-formulir') ?>/'+response.peserta+'" class="btn btn-primary" target="_blank" style="width:100%;"> Cetak Formulir Pendaftaran</a><br>'+
              '<div>'+
              '<div class="text-center" style="padding-top:15px;">'+
                '<a href="<?= $this->url->get('Cetak-biodata-peserta') ?>/'+response.peserta+'" class="btn btn-primary" target="_blank" style="width:100%;"> Cetak Biodata Peserta Pendaftaran</a><br>'+
              '<div>',
            });
          }
         


        }
      });
    
 
    e.preventDefault();
  });

})();



</script>