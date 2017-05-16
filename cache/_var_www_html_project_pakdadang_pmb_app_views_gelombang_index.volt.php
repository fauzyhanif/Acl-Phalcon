<style>
.cursor:hover{
  cursor: pointer;
  color: #ccc;
}
</style>
<section class="content-header animated fadeIn">
  <h1>Jurusan</h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-home"></i> Home</li>
    <li>Data Master</li>
    <li class="active">Sesi Pendaftaran</li>
  </ol>
</section>

<section class="content animated fadeIn">
  <div class="row">

    <div class="col-md-3">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Input Sesi</h3>
        </div>
        <div class="box-body">
          <form name="group" action="<?= $this->url->get('Gelombang/input') ?>" method="POST" data-remote="data-remote">
            <div class="form-group">
              <label>Tahun Akademik</label>
              <input type="text" name="thn_akd" class="form-control">
            </div>

            <div class="form-group">
              <label>Nama Sesi</label>
              <input type="text" name="nama_sesi" class="form-control">
            </div>

            <div class="form-group">
              <label>Mulai Tanggal</label>
              <input type="date" name="tgl1" class="form-control">
            </div>

            <div class="form-group">
              <label>Berakhir Tanggal</label>
              <input type="date" name="tgl2" class="form-control">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
            </div>
          </form>
       	</div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">List Sesi Pendaftaran</h3>
        </div>
        <div class="box-body">
          <div class="table-responsive">
          
            <table id="table" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <td width="40">
                    <b>No</b>
                  </td>
                  <td align="center" width="150">
                    <b>Action</b>
                  </td>
                  <td>
                    <b>Tahun Akd.</b>
                  </td><td>
                    <b>Nama Sesi</b>
                  </td><td>
                    <b>Mulai Tgl</b>
                  </td>
                  <td>
                    <b>Berakhir Tgl</b>
                  </td>
                </tr>
              </thead>
              <tbody id="listView">
              	<?php $no = 1; ?>
                <?php foreach ($sesi as $x) { ?>
                <tr id="del<?= $x->id ?>">
                  <td><?= $no ?></td>
                  <td>
                  	<i class="fa fa-edit cursor" style="font-size:18px;" data-toggle="modal" data-target="#Tambah" onclick="updated('<?= $x->id ?>', '<?= $x->thn_akd ?>', '<?= $x->nama_sesi ?>', '<?= $x->tgl1 ?>', '<?= $x->tgl2 ?>')"></i> |
                  	<i class="fa fa-trash cursor" style="font-size:18px;" data-toggle="modal" data-target="#Delete" onclick="deleted(<?= $x->id ?>, '<?= $x->nama_sesi ?>')"></i> |
                  	<?php if ($x->actived === 'Y') { ?>
                    <i class="fa fa-power-off cursor text-danger" style="font-size:18px;" id="text<?= $x->id ?>" onclick="status(<?= $x->id ?>, 'N')"></i> |
                    <span class="label bg-green" id="status<?= $x->id ?>">active</span>
                    <?php } else { ?>
                    <i class="fa fa-power-off cursor text-success" style="font-size:18px;" id="text<?= $x->id ?>" onclick="status(<?= $x->id ?>, 'Y')"></i> |
                    <span class="label bg-red" id="status<?= $x->id ?>">not active</span>
                    <?php } ?>
                  </td>
                  <td><?= $x->thn_akd ?></td>
                  <td><?= $x->nama_sesi ?></td>
                  <td><?= $x->tgl1 ?></td>
                  <td><?= $x->tgl2 ?></td>
                </tr>
                <?php $no = $no + 1; ?>
                <?php } ?>
               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- include popup -->
<div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Delete Jurusan</h4>
      </div>

      <form name="delete" action="<?= $this->url->get('Gelombang/deleted') ?>" method="POST" data-remote="data-remote">
        <div class="modal-body">
          <input type="hidden" name="id" id="id_delete" value="">
          <p>Apakah anda yakin akan menghapus Jurusan "<span id="jurusan" class="text-red"></span>" ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default close_btn" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </div>
      </form>

    </div>
  </div>
</div>
<div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clear_form()">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Updated Sesi</h4>
      </div>

      <form name="jurusan" method="POST" data-remote="data-remote">
        <div class="modal-body">
          <div class="form-group">
            <label>Tahun Akademik</label>
            <input type="text" name="thn_akd" class="form-control">
          </div>

          <div class="form-group">
            <label>Nama Sesi</label>
            <input type="text" name="nama_sesi" class="form-control">
          </div>

          <div class="form-group">
            <label>Mulai Tanggal</label>
            <input type="text" name="tgl1" class="form-control">
          </div>

          <div class="form-group">
            <label>Berakhir Tanggal</label>
            <input type="text" name="tgl2" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="clear_form()">Close</button>
          <button type="submit" class="btn btn-primary">Save Update</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!-- include Js -->
<script>
$(function () {
  $('#table').DataTable();
});

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
        new PNotify({
          title: response.title,
          text: response.text,
          type: response.type
        });
        if (response.close === 1) {
    	  $('#Tambah').modal('hide');
          list();
        } else if (response.close === 2) {
          $('#Delete').modal('hide');
          $('#del'+response.id).fadeOut(1000);
        } else {
          list();
          clear_form();
        }
      }
    });
 
    e.preventDefault();
  });

})();

function list() {
  $.ajax({
    type: 'GET',
    url: '<?= $this->url->get('Gelombang/list') ?>',
    dataType:'html',
    success: function(response){
      $('#listView').html(response);
    }
  });
}

// delete sesi
function deleted(id, golongan) {
	console.log(id);
  $('input#id_delete').val(id);
  $('span#jurusan').text(golongan);
}

// update sesi
function updated(id, thn_akd, nama_sesi, tgl1, tgl2) {
  var form = $('form[name="jurusan"]').attr('action', '<?= $this->url->get('Gelombang/updated/') ?>' + id);
  form.find('[name="thn_akd"]').val(thn_akd);
  form.find('[name="nama_sesi"]').val(nama_sesi);
  form.find('[name="tgl1"]').val(tgl1);
  form.find('[name="tgl2"]').val(tgl2);
}


// aktifasi 
function status(id, status) {
  $.ajax({
    type: 'POST',
    url: 'Gelombang/status',
    dataType:'json',
    data: 'id='+id+'&actived='+status,
    success: function(response){
      new PNotify({
        title: response.title,
        text: response.text,
        type: response.type
      });
      if (response.i === 'text-success' && response.bg === 'bg-green') {
        $("td i#text"+id)
          .attr("onclick", "status("+id+", '"+response.active+"')")
          .toggleClass('text-danger text-success');

        $("td span#status"+id)
          .toggleClass('bg-red bg-green')
          .text(response.status);
      } else if (response.i === 'text-danger' && response.bg === 'bg-red') {
        $("td i#text"+id)
          .attr("onclick", "status("+id+", '"+response.active+"')")
          .toggleClass('text-success text-danger');

        $("td span#status"+id)
          .toggleClass('bg-green bg-red')
          .text(response.status);
      }
    }
  });
}

</script>
