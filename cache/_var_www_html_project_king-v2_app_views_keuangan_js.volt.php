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