<script type="text/javascript">


// form mask rupiah
$(document).ready(function(){
  $(".1").mask("000.000.000", {reverse:true});
}); 

$(document).ready(function(){
  $(".phone_number").mask("0000-0000-0000", {reverse:true});
}); 

$(document).ready(function(){
  $(".hour").mask("00.00", {reverse:true});
}); 

// select
$(".select1").select2();

// datepicker
$('.datepicker').datepicker({
  autoclose: true
});
$('#datepicker2').datepicker({
  autoclose: true
});

// reset form
function reset()
{
  $('#pendaftaran').trigger("reset");
}

// filter nama ketika pembayaran
function nama(id){
   $.ajax({
     type: "POST",
     url: "Pembayaran/filter",
     dataType : 'json',
     data: "id="+id,
     success: function(result){
      // console.log(result)
      $('#name').html(": "+result[0].b.name);
      $('#date_of_birth').val(result[0].b.date_of_birth);
      $('#gender').val(result[0].b.gender);
      $('#program').html(": "+result[0].c.nm_program_studi+"/"+result[0].a.level);
      $('#registration_fee').html(": "+result[0].a.registration_fee);
      $('#tuition_fee').html(": "+result[0].a.tuition_fee);
      $('#total_fee').html(": "+result[0].a.total_fee);
      $('#term').val(result[0].a.term);
      $('#years').val(result[0].a.years);
     }
   });
}

// nambah level ketika bayar double
function xx(id){
   var x = '';
   if (id == 'INTENSIVE (22 sesi = 2 level)') {
      x += '<select class="form-control" name="level2">'
      x += '<option>- Pilih level -</option>';
      for (var i = 1; i < 17; i++) {
        x += '<option>'+i+'</option>';
      }
      x += '<select>';

      $('#level2').html(x);
   } else {
      $('#level2').html('');
   }
}


// filter program studi menampilkan harga
function program_studi(id){
  var type_pembayaran = $('#type_pembayaran').val();
  var cara_pembayaran = $('#cara_pembayaran').val();
  var x = '';
   $.ajax({
     type: "POST",
     url: "Pendaftaran/filterprogram",
     dataType : 'json',
     data: "id="+id+"&type_pembayaran="+type_pembayaran,
     success: function(result){
      if (cara_pembayaran == 'Angsuran') {
        // $(".tuition_fee").val(result.biaya_kursus_angsuran2);
        $("#biaya_depan").html('');
        $("#biaya_angsuran").html(result.biaya_kursus_angsuran);
        $("#angsuran_1").html(result.angsuran_1);
        $("#angsuran_2").html(result.angsuran_2);
      } else {
        $("#biaya_depan").html(result.biaya_kursus);
        // $(".tuition_fee").val(result.biaya_kursus2);
        $("#biaya_angsuran").html('');
        $("#angsuran_1").html('');
        $("#angsuran_2").html('');
      }
      $("#pbi").val(result.id);
     }
   });
}


// menampilkan form pembayaran
function form2() {
  $('#status_mulai').val("Aktif");
  $.ajax({
    type: 'GET',
    url: '<?= $this->url->get('Pendaftaran/form2') ?>',
    dataType:'html',
    success: function(response){
      $('#status').val('PESERTA');
      $('#form2').html(response);
      $('#persetujuan').html('');
      var id = $('#id_program').val();
      program_studi(id);
      form3();
      Keyup();
      $('.box-footer').html('<button type="button" onclick="hideForm()" class="btn btn-flat btn-default">Hide Form Pembayaran</button> '+
                            '<button type="button" onclick="reset()" class="btn btn-flat btn-danger">Reset</button> '+
                            '<button type="submit" class="btn btn-flat btn-primary">Submit</button>')
      // $('#bayar-hidden').html('<input class="bayar1" type="text" name="bayar">');
    }
  });
}


// menampilkan form biodata
function form3() {
  $.ajax({
    type: 'GET',
    url: '<?= $this->url->get('Pendaftaran/form3') ?>',
    dataType:'html',
    success: function(response){
      $('#status').val('PESERTA');
      $('#form3').html(response);
      $('#status_mulai').val("Aktif");
    }
  });
}

// hide form 2 dan 3
function hideForm() {
  $('#status').val('DAFTAR');
  $('#form2').html('');
  $('#form3').html('');
  $('.box-footer').html('<button type="button" onclick="form2()" class="btn btn-flat btn-default">Show Form Pembayaran</button> '+
                            '<button type="button" onclick="reset()" class="btn btn-flat btn-danger">Reset</button> '+
                            '<button type="submit" class="btn btn-flat btn-primary">Submit</button>');
  // $('#bayar-hidden').html('<input class="bayar1" type="text" name="bayar">');
  $('#status_mulai').val("Belum Mulai");
}


// hide button persetujuan
function hidePersetujuan() {
  $('#status').val('DAFTAR');
  $('#persetujuan').html('');
  $('.box-footer').html('<button type="button" onclick="form2()" class="btn btn-flat btn-default">Show Form Pembayaran</button> '+
                            '<button type="button" onclick="reset()" class="btn btn-flat btn-danger">Reset</button> '+
                            '<button type="submit" class="btn btn-flat btn-primary">Submit</button>')
  // $('#bayar-hidden').html('<input class="bayar1" type="text" name="bayar">');
  $('#status_mulai').val("Belum Mulai");
}


// show button persetujuan
function showPersetujuan() {
  $('#status_mulai').val("Aktif");
  $('#status').val('PESERTA');
  $('#form2').html('');
  $('#form3').html('');
  $('#persetujuan').html('<h1 class="text-center">Ingin melanjutkan ke Pembayaran ?</h1>'+
                          '<div class="text-center">'+
                          '<a class="btn btn-flat btn-danger" style="width: 200px" onclick="hidePersetujuan()">Tidak</a> '+
                          '<a class="btn btn-flat btn-success" style="width: 200px" onclick="form2()">Ya</a>'+
                          '</div>');

}

// save-edit-delete


function Keyup(){
  $(".bayar2").keyup(function(){
    var x = $(".bayar2").val();
      $(".bayar1").val(x);
  });

  $("#years1").keyup(function(){
    var x = $("#years1").val();
      $("#years2").val(x);
  });  

  $("#name_1").keyup(function(){
    var x = $("#name_1").val();
      $("#name_2").val(x);
  });  

  $("#fathers_name_1").keyup(function(){
    var x = $("#fathers_name_1").val();
      $("#fathers_name_2").val(x);
  });  

  $("#mothers_name_1").keyup(function(){
    var x = $("#mothers_name_1").val();
      $("#mothers_name_2").val(x);
  });

  $("#phone_number_1").keyup(function(){
    var x = $("#phone_number_1").val();
      $("#phone_number_2").val(x);
  });

  $("#phone_number_alternative_1").keyup(function(){
    var x = $("#phone_number_alternative_1").val();
      $("#phone_number_alternative_2").val(x);
  });  

  $("#email_1").keyup(function(){
    var x = $("#email_1").val();
      $("#email_2").val(x);
  });  

};

// $("#term1").on("change", terms);
function terms(id){
  // console.log(id)
  $("#term2").val(id);
}

function filterKota(id){
 $.ajax({
   type: "POST",
   url: "Pendaftaran/kota",
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
   url: "Pendaftaran/kcmtn",
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
  // console.log(id);
  $.ajax({
    type: "POST",
    url: "Pendaftaran/desa",
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
   url: "Pendaftaran/kota",
   dataType : 'json',
   data: "id="+id,
   success: function(result){
    var y = '<option>- Pilih Kota -</option>'
    for (var x in result){
      y += '<option value="'+result[x].id+'">'+result[x].name+'</option>'
    }
    $('#kota2').html(y)
   }
 });
}

function filterKcmtn2(id){
 $.ajax({
   type: "POST",
   url: "Pendaftaran/kcmtn",
   dataType : 'json',
   data: "id="+id,
   success: function(result){
    var y = '<option>- Pilih Kecamatan -</option>'
    for (var x in result){
      y += '<option value="'+result[x].id+'">'+result[x].name+'</option>'
    }
    $('#kcmtn2').html(y)
   }
 });
}

function filterDesa2(id){
  // console.log(id);
  $.ajax({
    type: "POST",
    url: "Pendaftaran/desa",
    dataType : 'json',
    data: "id="+id,
    success: function(result){
      var y = '<option>- Pilih Desa -</option>'
      for (var x in result){
        y += '<option value="'+result[x].id+'">'+result[x].name+'</option>'
      }
      $('#desa2').html(y)
    }
  });
}

function TambahHari(){
  $('#tambahanHari').html('<div class="col-sm-3">'+
                          '<select class="form-control" name="day_2">'+
                            '<option>- Pilih hari -</option>'+
                            '<option>Senin</option>'+
                            '<option>Selasa</option>'+
                            '<option>Rabu</option>'+
                            '<option>Kamis</option>'+
                            '<option>Jumat</option>'+
                            '<option>Sabtu</option>'+
                            '<option>Minggu</option>'+
                          '</select>'+
                        '</div>'+
                        
                        '<div class="col-sm-1">'+
                          '<input type="text" class="form-control hour" name="hour_2" placeholder="12.00" maxlength="5">'+
                        '</div>')
}


</script>