<section class="content animated fadeIn">
  <div class="row">

    <div class="col-md-12">
      <div class="box box-danger">
        <div class="box-header">
          <h1 class="box-title">Daftar Ulang</h1>
          <div class="box-tools pull-right">
            <a href="<?= $this->url->get('') ?>" class="btn bg-navy btn-flat btn-block">
              <i class="fa fa-edit"></i> 
            </a>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <form class="form-horizontal" id="pendaftaran" action="<?= $this->url->get('Pendaftaran-ulang/proses') ?>" method="POST" data-remote >
          <h3 style="color: #4183D7">I. Program</h3>
            <div class="form-group">
              <label class="col-sm-1"></label>
              <label for="inputEmail3" class="col-sm-2 ">Program/Level</label>

              <input type="hidden" id="programs" name="program_biaya_id">

              <div class="col-sm-4">
                <select class="form-control" name="program_id" onchange="program_studi(this.value);">
                  <option value="">- Pilih Program Studi -</option>
                  <?php foreach ($program as $x) { ?>
                  <option value="<?= $x->id ?>"><?= $x->nm_program_studi ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="col-sm-4">
                <select class="form-control" name="level_active" id="level" onchange="levels(this.value);">

                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Hari / Jam</label>

              <div class="col-sm-2">
                <select class="form-control" name="day">
                  <option>Senin</option>
                  <option>Selasa</option>
                  <option>Rabu</option>
                  <option>Kamis</option>
                  <option>Jum'at</option>
                  <option>Sabtu</option>
                  <option>Minggu</option>
                </select>
              </div>

              <div class="col-sm-1">
                <input type="text" class="form-control" name="hour" placeholder="12.00">
              </div>

              <label for="inputEmail3" class="col-sm-2 " style="padding-left: 102px">Tanggal Mulai</label>
              <div class="col-sm-3" style="padding-left: 40px">
                <input type="text" class="form-control pull-right" name="start_date" id="datepicker">
              </div>
            </div>

            <h3 style="color: #4183D7">II. Nama Perserta</h3>
            <div class="form-group">
              <label class="col-sm-1"></label>
              <label class="col-sm-2 ">Nama Lengkap</label>

              <div class="col-sm-8">
                <select class="form-control" name="student_number" id="select">
                  <option value="">- Pilih Peserta -</option>
                  <?php foreach ($peserta as $x) { ?>
                  <option value="<?= $x->student_number ?>"><?= $x->name ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <h3 style="color: #4183D7">III. Investasi</h3>
            <div class="form-group">
              <label class="col-sm-1"></label>
              <label for="inputEmail3" class="col-sm-2 ">Pendaftaran</label>

              <div class="col-sm-3">
                <input type="text" class="form-control" id="registration_fee" name="registration_fee" placeholder="Rp.">
              </div>
              <label for="inputEmail3" class="col-sm-2 ">s/d Tanggal</label>
              <div class="col-sm-3">
               <input type="text" class="form-control pull-right" name="registration_date" id="datepicker2">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-1"></label>
              <label for="inputEmail3" class="col-sm-2 ">Investasi Program</label>

              <div class="col-sm-3">
                <input type="text" class="form-control" id="tuition_fee" name="tuition_fee" placeholder="Rp.">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-1"></label>
              <label for="inputEmail3" class="col-sm-2 ">Total</label>

              <div class="col-sm-3">
                <input type="text" class="form-control" id="total_fee" name="total_fee" placeholder="Rp.">
              </div>
            </div>

            <div class="box-footer text-right" style="margin-right: 100px">
              <button type="button" onclick="reset()" class="btn btn-flat btn-default">Cancel</button>
              <button type="submit" class="btn btn-flat btn-primary">Submit</button>
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
$("#select").select2();

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
        var int_kursus = parseInt(result.kursus)
        var int_pendaftaran = parseInt(result.pendaftaran)
        $("#total_fee").val(int_kursus + int_pendaftaran);
     }
   });
}

</script>