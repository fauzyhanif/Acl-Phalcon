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