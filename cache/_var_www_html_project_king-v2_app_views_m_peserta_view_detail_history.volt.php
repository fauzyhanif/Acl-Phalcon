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

    <div class="col-md-12">
      <div class="box box-danger">
        <div class="box-header">
          <!-- <h1 class="box-title">Detail History Program Peserta</h1> -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
          	<div class="col-md-12">
	            <table id="example1" class="table table-bordered table-striped">
		          <thead>
		            <tr>
		              <th colspan="5">Detail History Program Peserta 
                  <a style="margin-left: 5px;" class="btn btn-primary btn-flat btn-xs pull-right" href="<?= $this->url->get('Peserta/Profil/') ?><?= $data[0]->a->student_number ?>">
                    <i class="fa fa-chevron-circle-left"></i> Kembali ke Profil
                  </a>
                  <a class="btn btn-primary btn-flat btn-xs pull-right" data-toggle="modal" data-target="#Edit">
                    <i class="fa fa-edit"></i> Edit
                  </a>
                  </th>
		            </tr>
		          </thead>
		          <tbody>
		          	<tr >
		          	  <td width="270" style="padding: 0px 0px 0px 15px; width: 15%"><h4>Student Number</h4></td>
		              <td style="padding: 0px 0px 0px 15px; width: 33%"><h4><?= $data[0]->a->student_number ?></h4></td>
		              <td width="20" style="padding: 0px 0px 0px 15px;width: 5%"><h4></h4></td>
		              <td style="padding: 0px 0px 0px 15px; width: 15%"><h4>Start Date</h4></td>
		              <td style="padding: 0px 0px 0px 15px; width: 32%"><h4><?= $data[0]->a->start_date ?></h4></td>
		          	</tr>

		          	<tr >
		          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>Name</h4></td>
		              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->name ?></h4></td>
		              <td width="20" style="padding: 0px 0px 0px 15px;"><h4></h4></td>
		              <td style="padding: 0px 0px 0px 15px;"><h4>End Date</h4></td>
		              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->a->end_date ?></h4></td>
		          	</tr>

		          	<tr >
		          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>Term/Years</h4></td>
		              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->a->term ?>/<?= $data[0]->a->years ?></h4></td>
		              <td width="20" style="padding: 0px 0px 0px 15px;"><h4></h4></td>
		              <td style="padding: 0px 0px 0px 15px;"><h4>Registration Fee</h4></td>
		              <td style="padding: 0px 0px 0px 15px;"><h4><?= number_format($data[0]->a->registration_fee,0,',','.') ?></h4></td>
		          	</tr>

		          	<tr >
		          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>Program/Level</h4></td>
		              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->b->nm_program_studi ?>/<?= $data[0]->a->level ?></h4></td>
		              <td width="20" style="padding: 0px 0px 0px 15px;"><h4></h4></td>
		              <td style="padding: 0px 0px 0px 15px;"><h4>Tuition Fee</h4></td>
		              <td style="padding: 0px 0px 0px 15px;"><h4><?= number_format($data[0]->a->registration_fee,0,',','.') ?></h4></td>
		          	</tr>

		          	<tr >
		          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>Teacher</h4></td>
		              <td style="padding: 0px 0px 0px 15px;"><h4></h4></td>
		              <td width="20" style="padding: 0px 0px 0px 15px;"><h4></h4></td>
		              <td style="padding: 0px 0px 0px 15px;"><h4>Registration Date</h4></td>
		              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->a->registration_date ?></h4></td>
		          	</tr>

		          	<tr >
		          	  <td width="270" style="padding: 0px 0px 0px 15px;"><h4>Day/Hour</h4></td>
		              <td style="padding: 0px 0px 0px 15px;"><h4><?= $data[0]->a->day ?>/<?= $data[0]->a->hour ?></h4></td>
		              <td width="20" style="padding: 0px 0px 0px 15px;"><h4></h4></td>
		              <td style="padding: 0px 0px 0px 15px;"><h4>Status</h4></td>
		              <td style="padding: 0px 0px 0px 15px;"><h4>
		              	<?php if ($data[0]->a->actived == 'Y') { ?>
		              		Active
		              	<?php } else { ?>
		              		Not Active
		              	<?php } ?>
		              	</h4></td>
		          	</tr>
		          </tbody>
		        </table>
		    </div>
          </div>
        </div>

      </div>
    </div>



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