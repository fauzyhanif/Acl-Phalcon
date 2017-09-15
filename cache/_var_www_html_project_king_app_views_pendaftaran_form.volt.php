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

<section class="content animated fadeIn">
  <div class="row">

    <div class="col-md-12">
      <div class="box box-danger">
        <div class="box-header">
          <h1 class="box-title">List Pendaftaran</h1>
          <div class="box-tools pull-right">
            <a href="<?= $this->url->get('Pendaftaran-ulang') ?>" class="btn btn-warning btn-flat btn-block">
              Sudah mendaftar sebelumnya? Klik Disini!
            </a>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <form class="form-horizontal" id="pendaftaran" action="<?= $this->url->get('Pendaftaran/input') ?>" method="POST" data-remote >
              <div class="box-body">
              <h3 style="color: #4183D7">I. Program</h3>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label for="inputEmail3" class="col-sm-2 ">Program/Level</label>

                  <input type="hidden" id="programs" name="program">
                  <input type="hidden" id="pbi" name="program_biaya_id">

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
                  <label class="col-sm-2 ">Term/Tahun</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="term" value="<?= date('m') ?>" placeholder="term">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="years" value="<?= date('Y') ?>" placeholder="years">
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

                <h3 style="color: #4183D7">II. Biodata Perserta</h3>
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Nama Lengkap</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="name" placeholder="nama Lengkap" required="required">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Pekerjaan</label>

                  <div class="col-sm-8">
                  <select class="form-control" name="job_id">
                    <option value="">- Pilih Job -</option>
                    <?php foreach ($pekerjaan as $x) { ?>
                      <option value="<?= $x->id ?>"><?= $x->pekerjaan ?></option>
                    <?php } ?>
                  </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Nama Orang Tua</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="fathers_name" placeholder="Nama Ayah">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 "></label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="mothers_name" placeholder="Nama Ibu">
                    <span  style="color: #4183D7">* untuk siswa TK-SMA</span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Telpon / Hp</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="phone_number" placeholder="08xxx" required="required">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Email</label>

                  <div class="col-sm-8">
                    <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2 ">Alamat</label>

                  <div class="col-sm-8">
                    <textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3"></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="dusun" placeholder="Dusun">
                  </div>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="rt" placeholder="RT">
                  </div>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="rw" placeholder="RW">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3"></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="kcmtn" name="kcmtn" placeholder="Kecamatan">
                    <div id="autocomplete-kecamatan" style="width: 50px"></div>
                  </div>

                  <div class="col-sm-4">
                    <input type="text" id="desa" class="form-control" name="desa" placeholder="Desa">
                    <div id="autocomplete-desa"></div>
                  </div>
                </div>

                <div class="form-group" style="margin-bottom: 30px">
                  <label class="col-sm-3"></label>
                  <div class="col-sm-4">
                    <input type="text" id="kota" class="form-control" name="kota" placeholder="Kota/Kabupaten">
                    <div id="autocomplete-kota"></div>
                  </div>

                  <div class="col-sm-4">
                    <input type="text" id="provinsi" class="form-control" name="prvns" placeholder="Provinsi">
                    <div id="autocomplete-provinsi"></div>
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

              </div>
              <!-- /.box-body -->
              <div class="box-footer text-right" style="margin-right: 100px">
                <button type="button" onclick="reset()" class="btn btn-flat btn-default">Cancel</button>
                <button type="submit" class="btn btn-flat btn-primary">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
        </div>
      </div>
    </div>
  </div>
</section>


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
<script type="text/javascript">
	(function() {

  // kec
  'use strict';
    var kecJson = {
      <?= $kec ?>
    }
    var kecArray = $.map(kecJson, function(value, key) {
      return {
        value: value,
        data: key
      };
    });
    // Initialize autocomplete with custom appendTo:
    $('#kcmtn').autocomplete({
      minChars: 2,
      lookup: kecArray,
      appendTo: '#autocomplete-kecamatan',
    });
    $('#kcmtn').keyup(function(){
  });



  // desa
  'use strict';
    var desaJson = {
      <?= $desa ?>
    }
    var desaArray = $.map(desaJson, function(value, key) {
      return {
        value: value,
        data: key
      };
    });
    // Initialize autocomplete with custom appendTo:
    $('#desa').autocomplete({
      minChars: 2,
      lookup: desaArray,
      appendTo: '#autocomplete-desa',
    });
    $('#desa').keyup(function(){
  });


  // desa
  'use strict';
    var kotaJson = {
      <?= $kota ?>
    }
    var kotaArray = $.map(kotaJson, function(value, key) {
      return {
        value: value,
        data: key
      };
    });
    // Initialize autocomplete with custom appendTo:
    $('#kota').autocomplete({
      minChars: 2,
      lookup: kotaArray,
      appendTo: '#autocomplete-kota',
    });
    $('#kota').keyup(function(){
  });


  // desa
  'use strict';
    var provinsiJson = {
      <?= $provinsi ?>
    }
    var provinsiArray = $.map(provinsiJson, function(value, key) {
      return {
        value: value,
        data: key
      };
    });
    // Initialize autocomplete with custom appendTo:
    $('#provinsi').autocomplete({
      minChars: 2,
      lookup: provinsiArray,
      appendTo: '#autocomplete-provinsi',
    });
    $('#provinsi').keyup(function(){
  });

})();
</script>