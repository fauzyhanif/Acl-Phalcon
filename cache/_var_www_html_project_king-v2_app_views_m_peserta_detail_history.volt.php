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
<section class="content-header animated fadeIn">
  <h1>Detail History Program Peserta</h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-user"></i> Data peserta</li>
    <li class="active">Detail History Program Peserta</li>
  </ol>
</section>

<section class="content animated fadeIn">
  <div class="row" id="detailHistory">

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
		              <!-- <th></th> -->
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
		              <td style="padding: 0px 0px 0px 15px;"><h4><?= number_format($data[0]->a->tuition_fee,0,',','.') ?></h4></td>
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
  </div>
</section>

<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-lg">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close>
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="labelAcl">Edit History Program Peserta</h4>
      </div>

      <form name="edit_program_studi" action="<?= $this->url->get('/Peserta/Profil/Edit-history') ?>" method="POST" data-remote>
        <input type="hidden" name="id" id="id" value="<?= $data[0]->a->id ?>">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Term</label>
                <select class="form-control" name="term">
                	<option value="">- Pilih Term -</option>
                  <?php for ($i=1; $i < 5; $i++) { ?>
                    <?php if ($data[0]->a->term == $i){ ?>
                      <option value="<?= $i ?>" selected=""><?= $i ?></option>
                		<?php } else { ?>
                			<option value="<?= $i ?>"><?= $i ?></option>
                		<?php }; ?>
                	<?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label>Years</label>
                <input type="text" name="years" class="form-control" value="<?= $data[0]->a->years ?>">
              </div>

              <div class="form-group">
                <label>Program</label>
                <select class="form-control" name="id_program">
                  <option>- Pilih Program -</option>
                  <?php foreach ($program as $x) { ?>
                    <?php if ($data[0]->a->id_program == $x->id) { ?>
                     <option value="<?= $x->id ?>" selected=""><?= $x->nm_program_studi ?></option>
                    <?php } else { ?>
                     <option value="<?= $x->id ?>"><?= $x->nm_program_studi ?></option>
                    <?php } ?>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label>Level</label>
                <select class="form-control" name="level">
                  <option>- Pilih Level -</option>
                	<?php for ($i=1; $i < 17 ; $i++) { ?> 
                		<?php if ($data[0]->a->level == $i){ ?>
                      <option value="" selected=""><?= $i ?></option>
                    <?php } else { ?>
                      <option value="<?= $i ?>"><?= $i ?></option>
                    <?php }; ?>
                	<?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label>Teacher</label>
                <select class="form-control" name="term">
                	
                </select>
              </div>

              <div class="form-group">
                <label>Day</label>
                <select class="form-control" name="day">
                  <option selected="" value="">- Pilih Hari -</option>
                  <?php if ($data[0]->a->day == 'Senin'){ ?>
                    <option selected="">Senin</option>
                    <option >Selasa</option>
                    <option >Rabu</option>
                    <option >Kamis</option>
                    <option >Jumat</option>
                    <option >Sabtu</option>
                    <option >Minggu</option>
                  <?php } elseif ($data[0]->a->day == "Selasa") { ?>
                    <option >Senin</option>
                    <option selected="">Selasa</option>
                    <option >Rabu</option>
                    <option >Kamis</option>
                    <option >Jumat</option>
                    <option >Sabtu</option>
                    <option >Minggu</option>
                  <?php } elseif ($data[0]->a->day == "Rabu") { ?>
                    <option >Senin</option>
                    <option >Selasa</option>
                    <option selected="">Rabu</option>
                    <option >Kamis</option>
                    <option >Jumat</option>
                    <option >Sabtu</option>
                    <option >Minggu</option>
                  <?php } elseif ($data[0]->a->day == "Kamis") { ?>
                    <option >Senin</option>
                    <option >Selasa</option>
                    <option >Rabu</option>
                    <option selected="">Kamis</option>
                    <option >Jumat</option>
                    <option >Sabtu</option>
                    <option >Minggu</option>
                  <?php } elseif ($data[0]->a->day == "Jumat") { ?>
                    <option >Senin</option>
                    <option >Selasa</option>
                    <option >Rabu</option>
                    <option >Kamis</option>
                    <option selected="">Jum'at</option>
                    <option >Sabtu</option>
                    <option >Minggu</option>
                  <?php } elseif ($data[0]->a->day == "Sabtu") { ?>
                    <option >Senin</option>
                    <option >Selasa</option>
                    <option >Rabu</option>
                    <option >Kamis</option>
                    <option >Jumat</option>
                    <option selected="">Sabtu</option>
                    <option >Minggu</option>
                  <?php } elseif ($data[0]->a->day == "Minggu") { ?>
                    <option >Senin</option>
                    <option >Selasa</option>
                    <option >Rabu</option>
                    <option >Kamis</option>
                    <option >Jumat</option>
                    <option >Sabtu</option>
                    <option selected="">Minggu</option>
                  <?php } else {  ?>
                    <option >Senin</option>
                    <option >Selasa</option>
                    <option >Rabu</option>
                    <option >Kamis</option>
                    <option >Jumat</option>
                    <option >Sabtu</option>
                    <option >Minggu</option>
                  <?php }   ?>
                </select>
              </div>

              
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Start Date</label>
                <input type="text" class="form-control" name="start_date" value="<?= $data[0]->a->start_date ?>" id="datepickerx">
              </div>

              <div class="form-group">
                <label>End Date</label>
                <input type="text" class="form-control" name="end_date" value="<?= $data[0]->a->end_date ?>" id="datepickery">
              </div>

              <div class="form-group">
                <label>Registration Fee</label>
                <input type="text" class="form-control" name="registration_fee" value="<?= $data[0]->a->registration_fee ?>" >
              </div>

              <div class="form-group">
                <label>Tuition Fee</label>
                <input type="text" class="form-control" name="tuition_fee" value="<?= $data[0]->a->tuition_fee ?>">
                
              </div>

              <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="actived">
                  <?php if ($data[0]->a->actived = 'Y') {?>
                   <option value="Y" selected="">Active</option>
                    <option value="N">Not Active</option>
                  <?php } elseif ($data[0]->a->actived = 'N') {?>
                    <option value="Y">Active</option>
                  <option value="N" selected="">Not Active</option>
                  <?php } else { ?>
                    <option value="Y">Active</option>
                    <option value="N">Not Active</option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Save</button>
        </div>
      </form>

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