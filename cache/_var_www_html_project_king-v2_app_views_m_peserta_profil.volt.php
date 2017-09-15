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
<style type="text/css">
	.form-group {
		margin: 0px;
	}

	tr td .tabel {
		padding: 0px 0px 0px 15px;
	}
</style>

<section class="content-header animated fadeIn">
  <h1>Profil Peserta</h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-user"></i> Data peserta</li>
    <li class="active">Profil Peserta</li>
  </ol>
</section>
<section class="content animated fadeIn">
  <div class="row">
    <div class="col-md-12">
      <!-- Custom Tabs -->
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab_1" data-toggle="tab">Biodata Peserta</a></li>
          <li><a href="#tab_2" data-toggle="tab">History</a></li>
          <li><a href="#tab_3" data-toggle="tab">Keuangan</a></li>
          <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
        </ul>
        <div class="tab-content form-horizontal">
          <div class="tab-pane active" id="tab_1">
          	<table id="example1" class="table table-bordered table-striped">
	          <thead>
	            <tr>
	              <th colspan="2">Personal Identity <a href="<?= $this->url->get('Peserta/Edit/') ?><?= $id ?>" class="btn btn-primary btn-flat btn-xs pull-right"><i class="fa fa-edit"></i> Edit Biodata</a></th>
	              <!-- <th></th> -->
	            </tr>
	          </thead>
	          <tbody>
	          	<tr >
	          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>Name</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->name ?></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>Place/Date of Birth</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->place_of_birth ?>, <?= $data[0]->b->date_of_birth ?></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>occupation</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->occupation ?></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>School/Class</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->school ?>/<?= $data[0]->b->school_class ?></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>University</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->university ?></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>Department</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->department ?></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>Semester</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->semester ?></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>Gender</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->gender ?></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>Father's Name</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->fathers_name ?></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>Father's Occupation</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->fathers_occupation ?></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>Mother's Name</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->mothers_name ?></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>Mother's Occupation</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->mothers_occupation ?></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>Home Addres</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->alamat ?>, RT/RW: <?= $data[0]->b->rt ?>/<?= $data[0]->b->rw ?>, DESA <?= $data[0]->desa ?>, KEC. <?= $data[0]->kcmtn ?>, <?= $data[0]->kota ?>, <?= $data[0]->prvns ?> Zip Code: <?= $data[0]->b->zip_code ?></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>Current Addres</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->c_alamat ?>, RT/RW: <?= $data[0]->b->c_rt ?>/<?= $data[0]->b->c_rw ?>, DESA <?= $data[0]->c_desa ?>, KEC. <?= $data[0]->c_kcmtn ?>, <?= $data[0]->c_kota ?>, <?= $data[0]->c_prvns ?> Zip Code: <?= $data[0]->b->c_zip_code ?></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>Student's Phone Number / WhatsApps</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->phone_number ?></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>Parent's Phone Number </h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->parents_number_phone ?></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>Email</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->email ?></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>Facebook</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->facebook ?></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>Instagram</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->facebook ?></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>Religion</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->i->agama ?></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>Get Information from</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->j->nama ?></h4></td>
	          	</tr>
	          </tbody>
	        </table>

	        <table id="example1" class="table table-bordered table-striped">
	          <thead>
	            <tr>
	              <th colspan="8">Facilities Checklist</th>
	              <!-- <th></th> -->
	            </tr>
	          </thead>
	          <tbody>

	          	<tr >
	          	  <td width="50" style="padding: 0px 0px 0px 15px;"><h4><b>No.</b></h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><b>Facilities</<b></h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><b>Date</b></h4></td>
	              <td width="100" style="padding: 0px 0px 0px 15px;"><h4><b>Check</b></h4></td>
	              <td width="50" style="padding: 0px 0px 0px 15px;"><h4><b>No.</b></h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><b>Facilities</b></h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><b>Date</b></h4></td>
	              <td width="100" style="padding: 0px 0px 0px 15px;"><h4><b>Check</b></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="50" style="padding: 0px 0px 0px 15px;">
	          	  	<h4>1.</h4>
	          	  </td>
	              <td style="padding: 0px 0px 0px 15px;"><h4>Coursebook</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->corsebook_date ?></h4></td>
	              <td width="100" style="padding: 0px 0px 0px 15px;"><h4><?php if ($data[0]->b->coursebook == 'Y') { ?> Checked <?php } ?></h4></td>
	              <td width="50" style="padding: 0px 0px 0px 15px;"><h4>7.</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4>Receipt I</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->receipt_1_date ?></h4></td>
	              <td width="100" style="padding: 0px 0px 0px 15px;"><h4><?php if ($data[0]->b->receipt_1 == 'Y') { ?> Checked <?php } ?></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="50" style="padding: 0px 0px 0px 15px;"><h4>2.</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4>Student's Biodata</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->student_biodata_date ?></h4></td>
	              <td width="100" style="padding: 0px 0px 0px 15px;"><h4><?php if ($data[0]->b->students_biodata == 'Y') { ?> Checked <?php } ?></h4></td>
	              <td width="50" style="padding: 0px 0px 0px 15px;"><h4>8.</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4>Receipt II</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->receipt_2_date ?></h4></td>
	              <td width="100" style="padding: 0px 0px 0px 15px;"><h4></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="50" style="padding: 0px 0px 0px 15px;"><h4>3.</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4>Student Card</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->student_card_date ?></h4></td>
	              <td width="100" style="padding: 0px 0px 0px 15px;"><h4><?php if ($data[0]->b->student_card == 'Y') { ?> Checked <?php } ?></h4></td>
	              <td width="50" style="padding: 0px 0px 0px 15px;"><h4>9.</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4>Achievement Report</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->achievement_report_date ?></h4></td>
	              <td width="100" style="padding: 0px 0px 0px 15px;"><h4><?php if ($data[0]->b->achievement_report == 'Y') { ?> Checked <?php } ?></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="50" style="padding: 0px 0px 0px 15px;"><h4>4.</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4>Panduan dan Tata Tertib</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->panduan_date ?></h4></td>
	              <td width="100" style="padding: 0px 0px 0px 15px;"><h4><?php if ($data[0]->b->panduan == 'Y') { ?> Checked <?php } ?></h4></td>
	              <td width="50" style="padding: 0px 0px 0px 15px;"><h4>10.</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4>Photo 3x4</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->photo_date ?></h4></td>
	              <td width="100" style="padding: 0px 0px 0px 15px;"><h4><?php if ($data[0]->b->photo == 'Y') { ?> Checked <?php } ?></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="50" style="padding: 0px 0px 0px 15px;"><h4>5.</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4>Invoice I</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->invoice_1_date ?></h4></td>
	              <td width="100" style="padding: 0px 0px 0px 15px;"><h4><?php if ($data[0]->b->invoice_1 == 'Y') { ?> Checked <?php } ?></h4></td>
	              <td width="50" style="padding: 0px 0px 0px 15px;"><h4>11.</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4>Certificate</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->certivicate_date ?></h4></td>
	              <td width="100" style="padding: 0px 0px 0px 15px;"><h4><?php if ($data[0]->b->certivicate == 'Y') { ?> Checked <?php } ?></h4></td>
	          	</tr>

	          	<tr >
	          	  <td width="50" style="padding: 0px 0px 0px 15px;"><h4>6.</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4>Invoive II</h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->invoice_2_date ?></h4></td>
	              <td width="100" style="padding: 0px 0px 0px 15px;"><h4><?php if ($data[0]->b->invoice_2 == 'Y') { ?> Checked <?php } ?></h4></td>
	              <td width="50" style="padding: 0px 0px 0px 15px;"><h4></h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4></h4></td>
	              <td style="padding: 0px 0px 0px 15px;"><h4></h4></td>
	              <td width="100" style="padding: 0px 0px 0px 15px;"><h4></h4></td>
	          	</tr>

	          	
	          </tbody>
	        </table>

          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="tab_2">
            <table id="example1" class="table table-bordered table-striped">
	          <thead>
	            <tr>
	              <th width="30">No.</th>
	              <th>Program</th>
	              <th width="70">Level</th>
	              <th>Term</th>
	              <th>Status</th>
	              <th>Tuition Fee</th>
	              <th>Sisa Tagihan</th>
	              <th>Cetak</th>
	              <th>Action</th>
	            </tr>
	          </thead>
	          <tbody>
	          	<?php $no = 1; ?>
	          	<?php foreach ($history as $x) { ?>
	          	  <tr>
	          	  	<td><?= $no ?>.</td>
	          	  	<td><?= $x->b->nm_program_studi ?></td>
	          	  	<td><?= $x->a->level ?></td>
	          	  	<td><?= $x->a->term ?></td>
	          	  	<td><?= $x->a->status_mulai ?></td>
	          	  	<td><?= number_format($data[0]->a->tuition_fee,0,',','.') ?></td>
	          	  	<td><?= number_format($data[0]->a->sisa_tagihan,0,',','.') ?></td>
	          	  	<td>
	          	  	  <a href="<?= $this->url->get('Cetak-formulir/') ?><?= $x->a->id ?>" class="btn btn-primary btn-flat btn-xs" target="_blank"><i class="fa fa-print"></i> Formulir</a>

	          	  	  <a href="<?= $this->url->get('Cetak-biodata-peserta/') ?><?= $x->a->id ?>" class="btn btn-primary btn-flat btn-xs" target="_blank"><i class="fa fa-print"></i> Biodata</a>
	          	  	</td>
	          	  	<td>
	          	  		<a href="<?= $this->url->get('/Peserta/Profil/Detail-history/') ?><?= $x->a->id ?>" class="btn btn-primary btn-flat btn-xs"><i class="fa fa-info"></i> Detail</a>

	          	  	</td>
	          	  </tr>
	          	<?php $no = $no + 1; ?>
	          	<?php } ?>
	          </tbody>
	        </table>
          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="tab_3">
            <table id="example1" class="table table-bordered table-striped">
	          <thead>
	            <tr>
	              <th>No Kwitansi</th>
	              <th>Program</th>
	              <th>Level</th>
	              <th>Bayar</th>
	              <th>Tgl Bayar</th>
	              <th>Admin</th>
	              <th>Cetak</th>
	            </tr>
	          </thead>
	          <tbody>
	          	<?php foreach ($keuangan as $x) { ?>
	          	  <tr>
	          	  	<td><?= $x->a->no_kwitansi ?></td>
	          	  	<td><?= $x->c->nm_program_studi ?></td>
	          	  	<td><?= $x->b->level ?></td>
	          	  	<td><?= number_format($x->a->bayar,0,',','.') ?></td>
	          	  	<td><?= $x->a->tgl ?></td>
	          	  	<td><?= $x->a->user ?></td>
	          	  	<td><a href="<?= $this->url->get('Cetak-kwitansi/') ?><?= $x->a->no_kwitansi ?>" class="btn btn-primary btn-flat btn-xs" target="_blank"><i class="fa fa-print"> Kwitansi</i></a></td>
	          	  </tr>
	          	<?php } ?>
	          </tbody>
	        </table>
          </div>
          <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
      </div>
      <!-- nav-tabs-custom -->
    </div>
  </div>
</section>


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
