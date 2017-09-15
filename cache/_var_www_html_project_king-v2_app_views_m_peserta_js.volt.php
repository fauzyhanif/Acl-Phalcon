<script type="text/javascript">
for (var i = 0; i < 12; i++) {
  $('#datepicker'+[i]).datepicker({format: 'dd M yyyy'});
}
$('#datepicker').datepicker({format: 'dd M yyyy'});

$('#datepickerx').datepicker();
$('#datepickery').datepicker();

function filterKota(id){
 $.ajax({
   type: "POST",
   url: "<?= $this->url->get('Pendaftaran/kota') ?>",
   dataType : 'json',
   data: "id="+id,
   success: function(result){
    var y = '<option>- Pilih Kota -</option>'
    for (var x in result){
      y += '<option value="'+result[x].id+'">'+result[x].name+'</option>'
    }
    $('#kota').html(y)
   }
 });
}

function filterKcmtn(id){
 $.ajax({
   type: "POST",
   url: "<?= $this->url->get('Pendaftaran/kcmtn') ?>",
   dataType : 'json',
   data: "id="+id,
   success: function(result){
    var y = '<option>- Pilih Kecamatan -</option>'
    for (var x in result){
      y += '<option value="'+result[x].id+'">'+result[x].name+'</option>'
    }
    $('#kcmtn').html(y)
   }
 });
}

function filterDesa(id){
  $.ajax({
    type: "POST",
    url: "<?= $this->url->get('Pendaftaran/desa') ?>",
    dataType : 'json',
    data: "id="+id,
    success: function(result){
      var y = '<option>- Pilih Desa -</option>'
      for (var x in result){
        y += '<option value="'+result[x].id+'">'+result[x].name+'</option>'
      }
      $('#desa').html(y)
    }
  });
}

function filterKota2(id){
 $.ajax({
   type: "POST",
   url: "<?= $this->url->get('Pendaftaran/kota') ?>",
   dataType : 'json',
   data: "id="+id,
   success: function(result){
    var y = '<option>- Pilih Kota -</option>'
    for (var x in result){
      y += '<option value="'+result[x].id+'">'+result[x].name+'</option>'
    }
    $('#c_kota').html(y)
   }
 });
}

function filterKcmtn2(id){
 $.ajax({
   type: "POST",
   url: "<?= $this->url->get('Pendaftaran/kcmtn') ?>",
   dataType : 'json',
   data: "id="+id,
   success: function(result){
    var y = '<option>- Pilih Kecamatan -</option>'
    for (var x in result){
      y += '<option value="'+result[x].id+'">'+result[x].name+'</option>'
    }
    $('#c_kcmtn').html(y)
   }
 });
}

function filterDesa2(id){
  $.ajax({
    type: "POST",
    url: "<?= $this->url->get('Pendaftaran/desa') ?>",
    dataType : 'json',
    data: "id="+id,
    success: function(result){
      var y = '<option>- Pilih Desa -</option>'
      for (var x in result){
        y += '<option value="'+result[x].id+'">'+result[x].name+'</option>'
      }
      $('#c_desa').html(y)
    }
  });
}

function coursebooks(){
	var x = $('#coursebook').is(':checked');
	if (x) {
		// console.log("Y")
		$('#coursebook').val("Y");
	} else {
		// console.log("N")
		$('#coursebook').val("N");
	}
}

function certivicates(){
	var x = $('#certivicate').is(':checked');
	if (x) {
		// console.log("Y")
		$('#certivicate').val("Y");
	} else {
		// console.log("N")
		$('#certivicate').val("N");
	}
}

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
        $('#Edit').modal('hide');
        viewHistory($('#id').val())
        new PNotify({
          title: "Berhasil",
          text: response,
          type: "success"
        });

      }
    });
 
    e.preventDefault();
  });

})();

function viewHistory(id){
 $.ajax({
   type: "POST",
   url: "<?= $this->url->get('/Peserta/Profil/view-detail-history') ?>",
   dataType : 'html',
   data: "id="+id,
   success: function(result){
    $('#detailHistory').html(result);
   }
 });
}
</script>