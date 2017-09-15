<script type="text/javascript">
$('#datepicker').datepicker({
  autoclose: true
});
$('#datepicker2').datepicker({
  autoclose: true
});

function reset()
{
  $('#pendaftaran').trigger("reset");
}

function program_studi(id){
   $.ajax({
     type: "POST",
     url: "Pendaftaran/filterprogram",
     dataType : 'json',
     data: "id="+id,
     success: function(result){
      var string = '';
      string += '<option value="">- Pilih Level -</option>'
      for (x in result) {
        string += '<option value="'+result[x].level+'">'+result[x].level+'</option>'
      }
      $("#level").html(string);
     }
   });
  $("#programs").val(id);
}



function levels(id){
  var program = $("#programs").val();
   $.ajax({
     type: "POST",
     url: "Pendaftaran/filterlevel",
     dataType : 'json',
     data: "id="+id+"&program="+program,
     success: function(result){
        $("#registration_fee").val(result.pendaftaran);
        $("#tuition_fee").val(result.kursus);
        $("#pbi").val(result.id);
        var int_kursus = parseInt(result.kursus)
        var int_pendaftaran = parseInt(result.pendaftaran)
        $("#total_fee").val(int_kursus + int_pendaftaran);
     }
   });
}

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
       swal({
          title: '<h2>Berhasil !</h2>',
          type: 'success',
          showConfirmButton:false,
          html:
          'Pendaftaran Peserta berhasil. <br>'+
          '<span>Klik tombol dibawah ini untuk melakukan pembayaran</span>. <br>'+
          '<div class="text-center" style="padding-top:30px;">'+
            '<a href="Pendaftaran/Pembayaran/'+response+'" class="btn btn-primary" style="width:100%;"> Lanjut Pembayaran</a>'+
          '<div>',
        });

        $('#pendaftaran').trigger("reset");
      }
    });
 
    e.preventDefault();
  });

})();



</script>