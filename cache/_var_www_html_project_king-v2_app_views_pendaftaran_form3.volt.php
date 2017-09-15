<div class="panel box box-primary">
    <div class="box-header with-border">
      <h4 class="box-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          BIODATA PESERTA
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="box-body">
        <h3 style="color: #4183D7">A. Program Identity <i>(Filled out by Staff)</i></h3>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Term/Year</label>

          <div class="col-sm-4">
            <input type="text" class="form-control" id="term2" placeholder="term" disabled="">
          </div>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="years2" placeholder="years" disabled="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Program/Level</label>

          <div class="col-sm-4">
            <input type="text" class="form-control" id="program1" disabled>
          </div>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="level1" disabled>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Teacher</label>

          <div class="col-sm-8">
            <select class="form-control" name="teacher_id">
              <option value="">- Select Teacher -</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Registration Fee</label>

          <div class="col-sm-8">
            <input type="text" class="form-control registration_fee" placeholder="Rp. " disabled="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Tuition Fee</label>

          <div class="col-sm-8">
            <input type="text" class="form-control tuition_fee" placeholder="Rp. " disabled="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Total Fee</label>

          <div class="col-sm-8">
            <input type="text" class="form-control total_fee" placeholder="Rp. " disabled="">
          </div>
        </div>

        

        <h3 style="color: #4183D7">B. Personal Identity <i>(Filled out by Staff)</i></h3>
        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Name</label>

          <div class="col-sm-8">
            <input type="text" class="form-control" id="name_2" disabled="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Place/Date of Birth</label>

          <div class="col-sm-4">
            <input type="text" class="form-control" name="place_of_birth" placeholder="Place of Birth" disabled="">
          </div>

          <div class="col-sm-4">
            <input type="text" class="form-control" name="date_of_birth" id="" disabled="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Occupation</label>

          <div class="col-sm-8">
            <input type="text" class="form-control" disabled="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Category</label>

          <div class="col-sm-8">
            <select class="form-control" name="category">
              <option value="">- Choose Category -</option>              
              <option>TK</option>              
              <option>SD</option>              
              <option>SMP</option>              
              <option>SMA</option>              
              <option>Mahasiswa</option>              
              <option>Umum</option>              
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Institution</label>

          <div class="col-sm-8">
            <input type="text" class="form-control" name="institution">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">School/Class </label>

          <div class="col-sm-6">
            <input type="text" class="form-control" name="school">
          </div>

          <div class="col-sm-2">
            <input type="text" class="form-control" name="school_class">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">University</label>

          <div class="col-sm-8">
            <input type="text" class="form-control" name="university">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Department/Semester</label>

          <div class="col-sm-4">
            <input type="text" class="form-control" name="department">
          </div>

          <div class="col-sm-4">
            <input type="text" class="form-control" name="semester">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Gender</label>

          <div class="col-sm-8">
            <select class="form-control" name="gender">
              <option value="">- Choose Gender -</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Father's Name</label>

          <div class="col-sm-8">
            <input type="text" class="form-control" id="fathers_name_2" disabled="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Father's Occupation</label>

          <div class="col-sm-8">
            <select class="form-control" name="fathers_occupation">
              <option value="">- Choose Occupation -</option>
              <?php foreach ($pekerjaan as $x) { ?>
              <option value="<?= $x->id ?>"><?= $x->pekerjaan ?></option>
              <?php } ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Mother's Name</label>

          <div class="col-sm-8">
            <input type="text" class="form-control" id="mothers_name_2" placeholder="Mother's Name" disabled="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Mother's Occupation</label>

          <div class="col-sm-8">
            <select class="form-control" name="mothers_occupation">
              <option value="">- Choose Occupation -</option>
              <?php foreach ($pekerjaan as $x) { ?>
              <option value="<?= $x->id ?>"><?= $x->pekerjaan ?></option>
              <?php } ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Home Addres</label>

          <div class="col-sm-8">
            <input type="text" class="form-control" id="alamat_2" name="alamat" placeholder="Jln.">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3"></label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="dusun_2" name="dusun" placeholder="Dusun">
          </div>

          <div class="col-sm-2">
            <input type="text" class="form-control" id="rt_2" name="rt" placeholder="RT">
          </div>

          <div class="col-sm-2">
            <input type="text" class="form-control" id="rw_2" name="rw" placeholder="RW">
          </div>
        </div>

        <div class="form-group" style="margin-bottom: 30px">
          <label class="col-sm-3"></label>
          <div class="col-sm-4">
            <select class="form-control" name="prvns" onchange="filterKota2(this.value)">
              <option value="">- Pilih Provinsi -</option>
              <?php foreach ($provinsi as $x) { ?>
              <option value="<?= $x->id ?>"><?= $x->name ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="col-sm-4">
            <select class="form-control" id="kota2" name="kota" onchange="filterKcmtn2(this.value)">
              
            </select>
          </div>
        </div>


        <div class="form-group">
          <label class="col-sm-3"></label>
          <div class="col-sm-4">
            <select class="form-control" id="kcmtn2" name="kcmtn" onchange="filterDesa2(this.value)">
              
            </select>
          </div>

          <div class="col-sm-4">
            <select class="form-control" id="desa2" name="desa">

            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3"></label>

          <div class="col-sm-8">
            <input type="text" class="form-control" id="zip_code_2"  name="zip_code" placeholder="Zip Code">
          </div>
        </div>


        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Student's Phone Number</label>

          <div class="col-sm-8">
            <input type="text" class="form-control" id="phone_number_2" disabled="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Student's Phone Number Alternatif</label>

          <div class="col-sm-8">
            <input type="text" class="form-control" id="phone_number_alternative_2" disabled="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Parent's Phone Number</label>

          <div class="col-sm-8">
            <input type="text" class="form-control" name="parents_phone_number">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Email</label>

          <div class="col-sm-8">
            <input type="text" class="form-control" id="email_2" placeholder="Email" disabled="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Facebook</label>

          <div class="col-sm-8">
            <input type="text" class="form-control" name="facebook" placeholder="Facebook">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Instagram</label>

          <div class="col-sm-8">
            <input type="text" class="form-control" name="instagram">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Religion</label>

          <div class="col-sm-8">
            <select class="form-control" name="religion">
              <option>- Select Religion -</option>
              <?php foreach ($agama as $x) { ?>
              <option value="<?= $x->id ?>"><?= $x->agama ?></option>
              <?php } ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-1"></label>
          <label class="col-sm-2 ">Get Information From</label>

          <div class="col-sm-8">
            <select class="form-control" name="get_information">
              <option>- Select Information -</option>
              <?php foreach ($informasi as $x) { ?>
              <option value="<?= $x->id ?>"><?= $x->nama ?></option>
              <?php } ?>
            </select>
          </div>
        </div>


        <h3 style="color: #4183D7">C. Facilities Checklist <i>(Filled out by Staff)</i></h3>
        <div class="form-group">
          <div class="checkbox">
            <label class="col-sm-1"></label>
            <label class="col-sm-2" style="padding-left: 40px">
              <input type="checkbox" name="coursebook" value="Y">
              <b>Coursebook</b>
            </label>
            <div class="col-sm-3">
              <input type="text" class="form-control pull-right" name="corsebook_date" id="datepicker2">
            </div>

            <label class="col-sm-2" style="padding-left: 60px">
              <input type="checkbox" name="receipt_1" value="Y">
              <b>Receipt I</b>
            </label>
            <div class="col-sm-3">
              <input type="text" class="form-control pull-right" name="receipt_1_date" id="datepicker3">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="checkbox">
            <label class="col-sm-1"></label>
            <label class="col-sm-2" style="padding-left: 40px">
              <input type="checkbox" name="students_biodata" value="Y">
              <b>Student's Biodata</b>
            </label>
            <div class="col-sm-3">
              <input type="text" class="form-control pull-right" name="student_biodata_date" id="datepicker4">
            </div>

            <label class="col-sm-2" style="padding-left: 60px">
              <input type="checkbox" name="receipt_2" value="Y">
              <b>Receipt II</b>
            </label>
            <div class="col-sm-3">
              <input type="text" class="form-control pull-right" name="receipt_2_date" id="datepicker5">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="checkbox">
            <label class="col-sm-1"></label>
            <label class="col-sm-2" style="padding-left: 40px">
              <input type="checkbox" name="student_card" value="Y">
              <b>Student Card</b>
            </label>
            <div class="col-sm-3">
              <input type="text" class="form-control pull-right" name="student_card_date" id="datepicker6">
            </div>

            <label class="col-sm-2" style="padding-left: 60px">
              <input type="checkbox" name="achievement_report" value="Y">
            <b>Achievment Report</b>
            </label>
            <div class="col-sm-3">
              <input type="text" class="form-control pull-right" name="achievement_report_date" id="datepicker7">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="checkbox">
            <label class="col-sm-1"></label>
            <label class="col-sm-2" style="padding-left: 40px">
              <input type="checkbox" name="panduan" value="Y">
              <b>Panduan dan Tata Tertib</b>
            </label>
            <div class="col-sm-3">
              <input type="text" class="form-control pull-right" name="panduan_date" id="datepicker8">
            </div>

            <label class="col-sm-2" style="padding-left: 60px">
              <input type="checkbox" name="photo" value="Y">
              <b>Photo 3x4</b>
            </label>
            <div class="col-sm-3">
              <input type="text" class="form-control pull-right" name="photo_date" id="datepicker9">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="checkbox">
            <label class="col-sm-1"></label>
            <label class="col-sm-2" style="padding-left: 40px">
              <input type="checkbox" name="invoice_1" value="Y">
              <b>Invoice I</b>
            </label>
            <div class="col-sm-3">
              <input type="text" class="form-control pull-right" name="invoice_1_date" id="datepicker10">
            </div>

            <label class="col-sm-2" style="padding-left: 60px">
              <input type="checkbox" name="certivicate" value="Y">
              <b>Certificate</b>
            </label>
            <div class="col-sm-3">
              <input type="text" class="form-control pull-right"  name="certivicate_date" id="datepicker11">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="checkbox">
            <label class="col-sm-1"></label>
            <label class="col-sm-2" style="padding-left: 40px">
              <input type="checkbox" name="invoice_2" value="Y">
              <b>Invoice 2</b>
            </label>
            <div class="col-sm-3">
              <input type="text" class="form-control pull-right" name="invoice_2_date" id="datepicker12">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


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
      $('#name').html(": "+result[0].b.name);
      $('#program').html(": "+result[0].d.nm_program_studi+"/"+result[0].a.level);
      $('#registration_fee').html(": "+result[0].a.registration_fee);
      $('#tuition_fee').html(": "+result[0].a.tuition_fee);
      $('#total_fee').html(": "+result[0].a.total_fee);
      $('#term').val("0"+result[0].a.term);
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