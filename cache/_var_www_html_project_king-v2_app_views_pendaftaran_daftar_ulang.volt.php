<section class="content-header animated fadeIn">
  <h1>Form Pendaftaran Program Lanjutan</h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-edit"></i> Pendaftaran</li>
    <li class="active">Form Pendaftaran Program Lanjutan</li>
  </ol>
</section>

<section class="content animated fadeIn">
  
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <!-- /.box-header -->
        <div class="box-body">
          <form class="form-horizontal" id="pendaftaran" action="<?= $this->url->get('Pendaftaran-ulang/proses') ?>" method="POST" data-remote>
            <input type="hidden" name="status_mulai" value="Aktif">
            <input type="hidden" name="status_new" value="continue">
            <input type="hidden" name="tahap" value="1">
            <div class="box-group" id="accordion">
              <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
              <div class="panel box box-primary">
                <div class="box-header with-border">
                  <h4 class="box-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      FORMULIR PENDAFTARAN
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="box-body">
                    <div class="box-body">
                      <h3 style="color: #4183D7">I. Program</h3>
                      <div class="form-group">
                        <label class="col-sm-1"></label>
                        <label class="col-sm-2 ">Cara Pembayaran</label>

                        <div class="col-sm-8">
                          <select class="form-control" name="cara_pembayaran" id="cara_pembayaran">
                            <option>- Pilih Cara Pembayaran -</option>
                            <option>Cash</option>
                            <option>Angsuran</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-1"></label>
                        <label class="col-sm-2 ">Package</label>

                        <div class="col-sm-8">
                          <select class="form-control" name="type_pembayaran" id="type_pembayaran">
                            <option>- Pilih Package -</option>
                            <option value="REGULER (12 sesi = 1 level)">REGULAR (12 sesi = 1 level)</option>
                            <option>INTENSIVE (22 sesi = 2 level)</option>
                            <option>Spesial Program</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-1"></label>
                        <label for="inputEmail3" class="col-sm-2 ">Program/Level</label>

                        <input type="hidden" id="programs" name="program">
                        <input type="hidden" id="pbi" name="program_biaya_id">

                        <div class="col-sm-4">
                          <select class="form-control" id="id_program" name="id_program" onchange="program_studi(this.value)">
                            <option value="">- Pilih Program -</option>
                            <?php foreach ($program as $x) { ?>
                            <option value="<?= $x->id ?>"><?= $x->nm_program_studi ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="col-sm-4">
                          <select class="form-control" name="level" id="level">
                            <option>- Pilih level -</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                          </select>
                        </div>

                        <div class="col-sm-2" id="level2">
                          
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-1"></label>
                        <label class="col-sm-2 ">Term/Tahun</label>

                        <div class="col-sm-4">
                          <select class="form-control" name="term" id="term1" onchange="terms(this.value)">
                            <option value="">- Pilih Term -</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                        </div>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="years1" name="years" placeholder="years" value="<?= date('Y') ?>">
                        </div>
                      </div>

                      

                      <div class="form-group">
                        <label class="col-sm-1"></label>
                        <label class="col-sm-2 ">Hari / Jam</label>

                        <div class="col-sm-3">
                          <select class="form-control" name="day">
                            <option>- Pilih hari -</option>
                            <option>Senin</option>
                            <option>Selasa</option>
                            <option>Rabu</option>
                            <option>Kamis</option>
                            <option>Jum'at</option>
                            <option>Sabtu</option>
                            <option>Minggu</option>
                          </select>
                        </div>
                        <a class="btn btn-flat btn-default" onclick="TambahHari()"><i class="fa fa-plus"></i></a>
                        <div class="col-sm-1">
                          <input type="text" class="form-control hour" name="hour" placeholder="12.00" maxlength="5">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-1"></label>
                        <label class="col-sm-2 "></label>

                        <div id="tambahanHari"></div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-1"></label>
                        <label class="col-sm-2 ">Tanggal Mulai</label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control pull-right datepicker" name="start_date" id="">
                        </div>
                      </div>

                      <h3 style="color: #4183D7">II. Peserta</h3>
                      <div class="form-group">
                        <label class="col-sm-1"></label>
                        <label class="col-sm-2 ">No Induk Siswa</label>

                        <div class="col-sm-8">
                          <select class="form-control select1" name="student_number" id="student_number">
                            <option>- Pilih No Induk Siswa -</option>
                            <?php foreach ($peserta as $x) { ?>
                            <option value="<?= $x->student_number ?>"><?= $x->student_number ?> / <?= $x->name ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <h3 style="color: #4183D7">III. Investasi</h3>
                      <div class="form-group">
                        <label class="col-sm-1"></label>
                        <label for="inputEmail3" class="col-sm-2 ">Biaya Pendaftaran</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control registration_fee 1" name="registration_fee" placeholder="Rp.">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-1"></label>
                        <label for="inputEmail3" class="col-sm-2 ">Biaya Kursus</label>

                        <div class="col-sm-3">
                          <div class="input-group input-group-sm">
                            <input type="text" class="form-control 1" name="tuition_fee" placeholder="Rp.">
                              <span class="input-group-btn">
                                <a class="btn btn-primary btn-flat" data-toggle="modal" data-target="#daftarHarga">Browse</a>
                              </span>
                          </div>
                          <!-- <input type="text" class="form-control tuition_fee" name="tuition_fee"  placeholder="Rp."> -->
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-1"></label>
                        <label for="inputEmail3" class="col-sm-2 ">Total Biaya</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control total_fee 1" name="total_fee" placeholder="Rp.">
                        </div>
                      </div>

                      <h3 style="color: #4183D7">IV. Pembayaran</h3>
                      

                    <div class="form-group">
                      <label class="col-sm-1"></label>
                      <label class="col-sm-2 ">Total Bayar</label>

                      <div class="col-sm-8">
                        <input type="text" class="form-control 1" name="bayar" required="">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-1"></label>
                      <label class="col-sm-2 ">Guna Membayar</label>

                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="keterangan">
                      </div>
                    </div>

                    </div>
                    <!-- /.box-body -->
                    <!-- /.box-footer -->
                  </div>
                </div>
              </div>
        
              
        	</div>
     	  </div>
          <div class="box-footer text-right" style="margin-right: 100px">
	        <button type="button" onclick="reset()" class="btn btn-flat btn-default">Cancel</button>
	        <button type="submit" class="btn btn-flat btn-primary">Submit</button>
	      </div>
    	</form>
  	  </div>
<!-- /.box-body -->
	</div>
<!-- /.box -->
  </div>
</section>

<div class="modal fade" id="daftarHarga" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-lg">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clear_form()">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="labelAcl">Daftar Harga </h4>
      </div>

      <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1" data-toggle="tab">REGULAR (12 Sesi = 1 level)</a></li>
            <li><a href="#tab_2" data-toggle="tab">INTENSIVE (22 sesi = 2 level)</a></li>
            <li><a href="#tab_3" data-toggle="tab">Spesial Program</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <table  class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <td width="35">
                      <b>No</b>
                    </td>
                    <td align="center" width="180">
                      <b>Action</b>
                    </td>
                  
                    <td align="center">
                      <b>Nama Program Study</b>
                    </td>

                    <td align="center" width="130">
                      <b>Biaya Lunas di Depan</b>
                    </td>

                    <td align="center" width="130">
                      <b>Total Biaya Angsuran</b>
                    </td>

                    <td align="center" width="130">
                      <b>Angsuran 1</b>
                    </td>

                    <td align="center" width="130">
                      <b>Angsuran 2</b>
                    </td>
                  </tr>
                </thead>
                <tbody id="listView1">
                  <?php $no = 1; ?>
                  <?php foreach ($biaya1 as $x) { ?>
                  <tr id="del<?= $x->a->id ?>">
                    <td><?= $no ?></td>
                    <td>
                      <button class="btn btn-primary btn-flat"  id="buttonCrudGroupMenu">
                        <i class="fa fa-edit cursor iconCrud" data-toggle="modal" data-target="#Edit" onclick="updated(<?= $x->a->id ?>, '<?= $x->a->program_id ?>', '<?= $x->a->biaya_kursus ?>', '<?= $x->a->biaya_kursus_angsuran ?>', '<?= $x->a->angsuran_1 ?>', '<?= $x->a->angsuran_2 ?>')"></i>  
                      </button>

                      <button class="btn btn-danger btn-flat"  id="buttonCrudGroupMenu">
                        <i class="fa fa-trash cursor iconCrud" data-toggle="modal" data-target="#Delete" onclick="deleted(<?= $x->a->id ?>, '<?= $x->b->nm_program_studi ?>')"></i>  
                      </button>
                      <?php if ($x->a->actived === 'Y') { ?>
                      <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
                        <i class="fa fa-power-off cursor text-success iconCrud" id="text<?= $x->a->id ?>" onclick="status(<?= $x->a->id ?>, 'N')"></i> 
                      </button>
                      <span class="label bg-green" id="status<?= $x->a->id ?>">active</span>
                      <?php } else { ?>
                      <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
                        <i class="fa fa-power-off cursor text-danger iconCrud" id="text<?= $x->a->id ?>" onclick="status(<?= $x->a->id ?>, 'Y')"></i> |
                      </button>
                      <span class="label bg-red" id="status<?= $x->a->id ?>">not active</span>
                      <?php } ?>
                    </td>
                    <td><?= $x->b->nm_program_studi ?></td>
                    <td>Rp. <?= number_format($x->a->biaya_kursus,0,',','.') ?></td>
                    <td>Rp. <?= number_format($x->a->biaya_kursus_angsuran,0,',','.') ?></td>
                    <td>Rp. <?= number_format($x->a->angsuran_1,0,',','.') ?></td>
                    <td>Rp. <?= number_format($x->a->angsuran_2,0,',','.') ?></td>
                  </tr>
                  <?php $no = $no + 1; ?>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_2">
              <table  class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <td width="35">
                      <b>No</b>
                    </td>
                    <td align="center" width="180">
                      <b>Action</b>
                    </td>
                  
                    <td align="center">
                      <b>Nama Program Study</b>
                    </td>

                    <td align="center" width="130">
                      <b>Biaya Lunas di Depan</b>
                    </td>

                    <td align="center" width="130">
                      <b>Total Biaya Angsuran</b>
                    </td>

                    <td align="center" width="130">
                      <b>Angsuran 1</b>
                    </td>

                    <td align="center" width="130">
                      <b>Angsuran 2</b>
                    </td>
                  </tr>
                </thead>
                <tbody id="listView2">
                  <?php $no = 1; ?>
                  <?php foreach ($biaya2 as $x) { ?>
                  <tr id="del<?= $x->a->id ?>">
                    <td><?= $no ?></td>
                    <td>
                      <button class="btn btn-primary btn-flat"  id="buttonCrudGroupMenu">
                        <i class="fa fa-edit cursor iconCrud" data-toggle="modal" data-target="#Edit" onclick="updated(<?= $x->a->id ?>, '<?= $x->a->program_id ?>', '<?= $x->a->biaya_kursus ?>', '<?= $x->a->biaya_kursus_angsuran ?>', '<?= $x->a->angsuran_1 ?>', '<?= $x->a->angsuran_2 ?>')"></i>  
                      </button>

                      <button class="btn btn-danger btn-flat"  id="buttonCrudGroupMenu">
                        <i class="fa fa-trash cursor iconCrud" data-toggle="modal" data-target="#Delete" onclick="deleted(<?= $x->a->id ?>, '<?= $x->b->nm_program_studi ?>')"></i>  
                      </button>
                      <?php if ($x->a->actived === 'Y') { ?>
                      <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
                        <i class="fa fa-power-off cursor text-success iconCrud" id="text<?= $x->a->id ?>" onclick="status(<?= $x->a->id ?>, 'N')"></i> 
                      </button>
                      <span class="label bg-green" id="status<?= $x->a->id ?>">active</span>
                      <?php } else { ?>
                      <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
                        <i class="fa fa-power-off cursor text-danger iconCrud" id="text<?= $x->a->id ?>" onclick="status(<?= $x->a->id ?>, 'Y')"></i> |
                      </button>
                      <span class="label bg-red" id="status<?= $x->a->id ?>">not active</span>
                      <?php } ?>
                    </td>
                    <td><?= $x->b->nm_program_studi ?></td>
                    <td>Rp. <?= number_format($x->a->biaya_kursus,0,',','.') ?></td>
                    <td>Rp. <?= number_format($x->a->biaya_kursus_angsuran,0,',','.') ?></td>
                    <td>Rp. <?= number_format($x->a->angsuran_1,0,',','.') ?></td>
                    <td>Rp. <?= number_format($x->a->angsuran_2,0,',','.') ?></td>
                  </tr>
                  <?php $no = $no + 1; ?>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_3">
              <table  class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <td width="35">
                      <b>No</b>
                    </td>
                    <td align="center" width="180">
                      <b>Action</b>
                    </td>
                  
                    <td align="center">
                      <b>Nama Program Study</b>
                    </td>

                    <td align="center" width="130">
                      <b>Biaya Lunas di Depan</b>
                    </td>

                    <td align="center" width="130">
                      <b>Total Biaya Angsuran</b>
                    </td>

                    <td align="center" width="130">
                      <b>Angsuran 1</b>
                    </td>

                    <td align="center" width="130">
                      <b>Angsuran 2</b>
                    </td>
                  </tr>
                </thead>
                <tbody id="listView3">
                  <?php $no = 1; ?>
                  <?php foreach ($biaya3 as $x) { ?>
                  <tr id="del<?= $x->a->id ?>">
                    <td><?= $no ?></td>
                    <td>
                      <button class="btn btn-primary btn-flat"  id="buttonCrudGroupMenu">
                        <i class="fa fa-edit cursor iconCrud" data-toggle="modal" data-target="#Edit" onclick="updated(<?= $x->a->id ?>, '<?= $x->a->program_id ?>', '<?= $x->a->biaya_kursus ?>', '<?= $x->a->biaya_kursus_angsuran ?>', '<?= $x->a->angsuran_1 ?>', '<?= $x->a->angsuran_2 ?>')"></i>  
                      </button>

                      <button class="btn btn-danger btn-flat"  id="buttonCrudGroupMenu">
                        <i class="fa fa-trash cursor iconCrud" data-toggle="modal" data-target="#Delete" onclick="deleted(<?= $x->a->id ?>, '<?= $x->b->nm_program_studi ?>')"></i>  
                      </button>
                      <?php if ($x->a->actived === 'Y') { ?>
                      <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
                        <i class="fa fa-power-off cursor text-success iconCrud" id="text<?= $x->a->id ?>" onclick="status(<?= $x->a->id ?>, 'N')"></i> 
                      </button>
                      <span class="label bg-green" id="status<?= $x->a->id ?>">active</span>
                      <?php } else { ?>
                      <button class="btn btn-default btn-flat"  id="buttonCrudGroupMenu">
                        <i class="fa fa-power-off cursor text-danger iconCrud" id="text<?= $x->a->id ?>" onclick="status(<?= $x->a->id ?>, 'Y')"></i> |
                      </button>
                      <span class="label bg-red" id="status<?= $x->a->id ?>">not active</span>
                      <?php } ?>
                    </td>
                    <td><?= $x->b->nm_program_studi ?></td>
                    <td>Rp. <?= number_format($x->a->biaya_kursus,0,',','.') ?></td>
                    <td>Rp. <?= number_format($x->a->biaya_kursus_angsuran,0,',','.') ?></td>
                    <td>Rp. <?= number_format($x->a->angsuran_1,0,',','.') ?></td>
                    <td>Rp. <?= number_format($x->a->angsuran_2,0,',','.') ?></td>
                  </tr>
                  <?php $no = $no + 1; ?>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.tab-pane -->
          </div>
        </div>
        <!-- /.tab-content -->

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
<script type="text/javascript">
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
          $('#pendaftaran').trigger("reset");
          $('#status').val('PESERTA');
		  $('#form2').html('');
		  $('#form3').html('');
		  $('#persetujuan').html('<h1 class="text-center">Ingin melanjutkan ke Pembayaran ?</h1>'+
		                          '<div class="text-center">'+
		                          '<a class="btn btn-flat btn-danger" style="width: 200px" onclick="hidePersetujuan()">Tidak</a> '+
		                          '<a class="btn btn-flat btn-success" style="width: 200px" onclick="form2()">Ya</a>'+
		                          '</div>');
		  $('.box-footer').html('');
          if (response.kwitansi) {
            swal({
              title: '<h2>Berhasil !</h2>',
              type: 'success',
              showConfirmButton:false,
              autoClose:false,
              html:
              'Pendaftaran Peserta berhasil. <br>'+
              '<div class="text-center" style="padding-top:30px;">'+
                '<a href="<?= $this->url->get('Cetak-formulir') ?>/'+response.peserta+'" class="btn btn-primary" target="_blank" style="width:100%;"> Cetak Formulir Pendaftaran</a><br>'+
              '<div>'+
              '<div class="text-center" style="padding-top:15px;">'+
                '<a href="<?= $this->url->get('Cetak-kwitansi') ?>/'+response.kwitansi+'" class="btn btn-primary" target="_blank" style="width:100%;"> Cetak Kwitansi</a><br>'+
              '<div>'+
              '<div class="text-center" style="padding-top:15px;">'+
                '<a href="<?= $this->url->get('Cetak-biodata-peserta') ?>/'+response.peserta+'" class="btn btn-primary" target="_blank" style="width:100%;"> Cetak Biodata Peserta Pendaftaran</a><br>'+
              '<div>',
            });
          } else {
            swal({
              title: '<h2>Berhasil !</h2>',
              type: 'success',
              showConfirmButton:false,
              html:
              'Pendaftaran Peserta berhasil. <br>'+
              '<div class="text-center" style="padding-top:30px;">'+
                '<a href="<?= $this->url->get('Cetak-formulir') ?>/'+response.peserta+'" class="btn btn-primary" target="_blank" style="width:100%;"> Cetak Formulir Pendaftaran</a><br>'+
              '<div>'+
              '<div class="text-center" style="padding-top:15px;">'+
                '<a href="<?= $this->url->get('Cetak-biodata-peserta') ?>/'+response.peserta+'" class="btn btn-primary" target="_blank" style="width:100%;"> Cetak Biodata Peserta Pendaftaran</a><br>'+
              '<div>',
            });
          }
         


        }
      });
    
 
    e.preventDefault();
  });

})();



</script>
